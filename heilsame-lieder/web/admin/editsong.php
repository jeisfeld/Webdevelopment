<?php
header('Content-Type: text/html; charset=UTF-8');

require_once __DIR__ . '/../db_config.php';

function nullIfEmpty($value) {
    if ($value === null) {
        return null;
    }

    return trim($value) === '' ? null : $value;
}

function fetchSong($conn, $songId) {
    $sql = "SELECT id, title, lyrics, lyrics_short, lyrics_paged, tabfilename, mp3filename, mp3filename2, author, keywords FROM songs WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (! $stmt) {
        error_log('Failed to prepare statement for fetching song: ' . $conn->error);
        return null;
    }

    $stmt->bind_param('s', $songId);
    $stmt->execute();
    $result = $stmt->get_result();

    if (! $result) {
        error_log('Failed to fetch song result: ' . $stmt->error);
        $stmt->close();
        return null;
    }

    $song = $result->fetch_assoc();
    $stmt->close();

    return $song ?: null;
}

function fetchAllMeanings($conn) {
    $sql = "SELECT id, title, meaning FROM meaning ORDER BY title, id";
    $meanings = [];

    $result = $conn->query($sql);

    if ($result === false) {
        error_log('Failed to fetch meanings: ' . $conn->error);
        return $meanings;
    }

    while ($row = $result->fetch_assoc()) {
        if (! isset($row['id'])) {
            continue;
        }

        $meaningId = (int) $row['id'];

        $meanings[] = [
            'id' => $meaningId,
            'title' => $row['title'] ?? '',
            'meaning' => $row['meaning'] ?? '',
        ];
    }

    $result->free();

    return $meanings;
}

function fetchSongMeaningIds($conn, $songId) {
    $sql = "SELECT meaning_id FROM song_meaning WHERE song_id = ? ORDER BY meaning_id";
    $stmt = $conn->prepare($sql);

    if (! $stmt) {
        error_log('Failed to prepare statement for fetching song meanings: ' . $conn->error);
        return [];
    }

    $stmt->bind_param('s', $songId);

    if (! $stmt->execute()) {
        error_log('Failed to execute song meaning statement: ' . $stmt->error);
        $stmt->close();
        return [];
    }

    $result = $stmt->get_result();

    if (! $result) {
        error_log('Failed to fetch song meaning result set: ' . $stmt->error);
        $stmt->close();
        return [];
    }

    $meaningIds = [];

    while ($row = $result->fetch_assoc()) {
        if (isset($row['meaning_id'])) {
            $meaningIds[] = (int) $row['meaning_id'];
        }
    }

    $stmt->close();

    return $meaningIds;
}

function parseMeaningIdsFromInput($input) {
    if ($input === null || $input === '') {
        return [];
    }

    $rawValues = [];

    if (is_array($input)) {
        $rawValues = $input;
    } else {
        $decoded = json_decode($input, true);
        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
            $rawValues = $decoded;
        } else {
            $rawValues = explode(',', (string) $input);
        }
    }

    $meaningIds = [];

    foreach ($rawValues as $value) {
        $stringValue = trim((string) $value);
        if ($stringValue === '') {
            continue;
        }

        if (! ctype_digit($stringValue)) {
            continue;
        }

        $meaningId = (int) $stringValue;

        if (! in_array($meaningId, $meaningIds, true)) {
            $meaningIds[] = $meaningId;
        }
    }

    return $meaningIds;
}

function updateSongMeaningRelationships($conn, $songId, array $meaningIds) {
    $deleteStmt = $conn->prepare('DELETE FROM song_meaning WHERE song_id = ?');

    if (! $deleteStmt) {
        error_log('Failed to prepare delete statement for song meanings: ' . $conn->error);
        return false;
    }

    $deleteStmt->bind_param('s', $songId);

    if (! $deleteStmt->execute()) {
        error_log('Failed to delete existing song meanings: ' . $deleteStmt->error);
        $deleteStmt->close();
        return false;
    }

    $deleteStmt->close();

    if (empty($meaningIds)) {
        return true;
    }

    $insertStmt = $conn->prepare('INSERT INTO song_meaning (song_id, meaning_id) VALUES (?, ?)');

    if (! $insertStmt) {
        error_log('Failed to prepare insert statement for song meanings: ' . $conn->error);
        return false;
    }

    $songIdParam = $songId;
    $meaningIdParam = 0;
    $insertStmt->bind_param('si', $songIdParam, $meaningIdParam);

    foreach ($meaningIds as $meaningId) {
        $meaningIdParam = (int) $meaningId;

        if (! $insertStmt->execute()) {
            error_log('Failed to insert song meaning relation: ' . $insertStmt->error);
            $insertStmt->close();
            return false;
        }
    }

    $insertStmt->close();

    return true;
}

function escapeHtml($value) {
    return htmlspecialchars((string) ($value ?? ''), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function buildFilenameSuggestions($directory, array $priorityPrefixes = []) {
    $suggestions = [
        'options' => [],
        'matching' => [],
        'directoryExists' => is_dir($directory),
    ];

    if (! $suggestions['directoryExists']) {
        return $suggestions;
    }

    $files = scandir($directory);
    if ($files === false) {
        return $suggestions;
    }

    $options = [];
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }

        $fullPath = $directory . DIRECTORY_SEPARATOR . $file;
        if (is_file($fullPath)) {
            $options[] = $file;
        }
    }

    if (empty($options)) {
        return $suggestions;
    }

    natcasesort($options);
    $options = array_values($options);

    $prefixes = [];
    foreach ($priorityPrefixes as $prefix) {
        $prefix = (string) $prefix;
        if ($prefix === '') {
            continue;
        }

        $prefixes[] = $prefix;
    }

    $prefixes = array_values(array_unique($prefixes));

    $matching = [];
    if (! empty($prefixes)) {
        foreach ($options as $filename) {
            foreach ($prefixes as $prefix) {
                if (stripos($filename, $prefix) === 0) {
                    $matching[] = $filename;
                    break;
                }
            }
        }

        $matching = array_values(array_unique($matching));

        if (! empty($matching)) {
            $options = array_merge($matching, array_values(array_diff($options, $matching)));
        }
    }

    $suggestions['options'] = $options;
    $suggestions['matching'] = $matching;

    return $suggestions;
}

function renderFilenameNote(array $matching, array $options, $prefix, $directoryExists, $folderPath) {
    if (! $directoryExists) {
        echo "<div class=\"form-note\">Folder " . escapeHtml($folderPath) . " is not available.</div>";
        return;
    }

    if (empty($options)) {
        echo "<div class=\"form-note\">No files found in " . escapeHtml($folderPath) . ".</div>";
        return;
    }

    if ($prefix !== '' && empty($matching)) {
        echo "<div class=\"form-note\">No files found in " . escapeHtml($folderPath) . " starting with " . escapeHtml($prefix) . ".</div>";
    }
}

$id = isset($_GET['id']) ? trim($_GET['id']) : '';
$successMessage = '';
$errorMessage = '';
$updateSuccess = false;
$formValues = null;
$requestedMeaningIds = [];
$songMeaningIdsFromDatabase = [];
$allMeanings = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? trim($_POST['id']) : $id;
    $title = isset($_POST['title']) ? trim($_POST['title']) : '';
    $lyrics = isset($_POST['lyrics']) ? $_POST['lyrics'] : '';
    $lyricsShortInput = isset($_POST['lyrics_short']) ? $_POST['lyrics_short'] : '';
    $lyricsPagedInput = isset($_POST['lyrics_paged']) ? $_POST['lyrics_paged'] : '';
    $tabfilenameInput = isset($_POST['tabfilename']) ? trim($_POST['tabfilename']) : '';
    $mp3filenameInput = isset($_POST['mp3filename']) ? trim($_POST['mp3filename']) : '';
    $mp3filename2Input = isset($_POST['mp3filename2']) ? trim($_POST['mp3filename2']) : '';
    $authorInput = isset($_POST['author']) ? trim($_POST['author']) : '';
    $keywordsInput = isset($_POST['keywords']) ? trim($_POST['keywords']) : '';

    $lyrics_short = nullIfEmpty($lyricsShortInput);
    $lyrics_paged = nullIfEmpty($lyricsPagedInput);
    $tabfilename = nullIfEmpty($tabfilenameInput);
    $mp3filename = nullIfEmpty($mp3filenameInput);
    $mp3filename2 = nullIfEmpty($mp3filename2Input);
    $author = nullIfEmpty($authorInput);
    $keywords = nullIfEmpty($keywordsInput);

    $meaningIdsInput = isset($_POST['meaning_ids']) ? $_POST['meaning_ids'] : '';
    $requestedMeaningIds = parseMeaningIdsFromInput($meaningIdsInput);

    $formValues = [
        'id' => $id,
        'title' => $title,
        'lyrics' => $lyrics,
        'lyrics_short' => $lyricsShortInput,
        'lyrics_paged' => $lyricsPagedInput,
        'tabfilename' => $tabfilenameInput,
        'mp3filename' => $mp3filenameInput,
        'mp3filename2' => $mp3filename2Input,
        'author' => $authorInput,
        'keywords' => $keywordsInput,
        'meaning_ids' => $requestedMeaningIds,
    ];

    if ($id === '') {
        $errorMessage = 'Missing song ID.';
    } else {
        $updateSql = "UPDATE songs SET title = ?, lyrics = ?, lyrics_short = ?, lyrics_paged = ?, tabfilename = ?, mp3filename = ?, mp3filename2 = ?, author = ?, keywords = ? WHERE id = ?";
        $updateStmt = $conn->prepare($updateSql);

        if (! $updateStmt) {
            error_log('Failed to prepare update statement: ' . $conn->error);
            $errorMessage = 'Unable to update the song at this time.';
        } else {
            $updateStmt->bind_param(
                'ssssssssss',
                $title,
                $lyrics,
                $lyrics_short,
                $lyrics_paged,
                $tabfilename,
                $mp3filename,
                $mp3filename2,
                $author,
                $keywords,
                $id
            );

            $transactionStarted = $conn->begin_transaction();
            if (! $transactionStarted) {
                error_log('Failed to begin transaction for song update: ' . $conn->error);
            }

            if ($updateStmt->execute()) {
                $relationshipsUpdated = updateSongMeaningRelationships($conn, $id, $requestedMeaningIds);

                if ($relationshipsUpdated) {
                    if ($transactionStarted) {
                        $conn->commit();
                    }

                    $updateSuccess = true;
                    $successMessage = 'Song updated successfully.';
                } else {
                    if ($transactionStarted) {
                        $conn->rollback();
                    }

                    $successMessage = '';
                    $errorMessage = 'Failed to update song meanings.';
                }
            } else {
                error_log('Failed to execute update statement: ' . $updateStmt->error);

                if ($transactionStarted) {
                    $conn->rollback();
                }

                $errorMessage = 'Failed to update the song.';
            }

            $updateStmt->close();
        }
    }
}

$songFromDatabase = null;
if ($id !== '') {
    $songFromDatabase = fetchSong($conn, $id);
    if (! $songFromDatabase && $errorMessage === '') {
        $errorMessage = 'Song not found.';
    } elseif ($songFromDatabase) {
        $songMeaningIdsFromDatabase = fetchSongMeaningIds($conn, $id);
    }
} elseif ($errorMessage === '') {
    $errorMessage = 'No song ID provided.';
}

$allMeanings = fetchAllMeanings($conn);

if ($updateSuccess && $songFromDatabase) {
    $songData = $songFromDatabase;
} elseif ($formValues) {
    $songData = $formValues;
} else {
    $songData = $songFromDatabase;
}

$selectedMeaningIdsForView = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($updateSuccess) {
        $selectedMeaningIdsForView = $songMeaningIdsFromDatabase;
    } else {
        $selectedMeaningIdsForView = $requestedMeaningIds;
    }
} else {
    $selectedMeaningIdsForView = $songMeaningIdsFromDatabase;
}

$selectedMeaningIdsForView = array_values(array_map('intval', $selectedMeaningIdsForView));

$conn->close();

$meaningLookup = [];
foreach ($allMeanings as $meaningEntry) {
    if (! isset($meaningEntry['id'])) {
        continue;
    }

    $meaningLookup[(string) $meaningEntry['id']] = $meaningEntry;
}

$selectedMeaningDetails = [];
foreach ($selectedMeaningIdsForView as $meaningId) {
    $key = (string) $meaningId;

    if (isset($meaningLookup[$key])) {
        $selectedMeaningDetails[] = $meaningLookup[$key];
    }
}

$selectedMeaningDetailsForDisplay = $selectedMeaningDetails;
usort($selectedMeaningDetailsForDisplay, function ($a, $b) {
    $titleA = isset($a['title']) ? (string) $a['title'] : '';
    $titleB = isset($b['title']) ? (string) $b['title'] : '';

    return strcasecmp($titleA, $titleB);
});

$jsonEncodeOptions = JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE;

$selectedMeaningIdsJson = json_encode($selectedMeaningIdsForView, $jsonEncodeOptions);
if ($selectedMeaningIdsJson === false) {
    $selectedMeaningIdsJson = '[]';
}

$allMeaningsJson = json_encode($allMeanings, $jsonEncodeOptions);
if ($allMeaningsJson === false) {
    $allMeaningsJson = '[]';
}

$songImagesDirectory = __DIR__ . '/../img/songs';
$audioSongsDirectory = __DIR__ . '/../audio/songs';
$songIdForSuggestions = isset($songData['id']) ? (string) $songData['id'] : (string) $id;

$tabFilenamePrefix = '';
$tabFilenamePrefixes = [];
if ($songIdForSuggestions !== '') {
    $tabFilenamePrefix = substr($songIdForSuggestions, 0, 4);
    if ($tabFilenamePrefix !== '') {
        $tabFilenamePrefixes[] = $tabFilenamePrefix;
    }
}

$tabSuggestions = buildFilenameSuggestions($songImagesDirectory, $tabFilenamePrefixes);
$tabFilenameOptions = $tabSuggestions['options'];
$matchingTabFilenames = $tabSuggestions['matching'];
$tabDirectoryExists = $tabSuggestions['directoryExists'];

$mp3FilenamePrefixes = [];
$mp3FilenamePrefix = '';
$trimmedSongId = $songIdForSuggestions !== '' ? ltrim($songIdForSuggestions, '0') : '';

if ($trimmedSongId !== '') {
    $mp3FilenamePrefix = $trimmedSongId;
    $mp3FilenamePrefixes[] = $trimmedSongId;
}

if ($songIdForSuggestions !== '' && $songIdForSuggestions !== $trimmedSongId) {
    $mp3FilenamePrefixes[] = $songIdForSuggestions;
}

$uniqueMp3Prefixes = [];
foreach ($mp3FilenamePrefixes as $prefix) {
    if ($prefix === '') {
        continue;
    }

    if (! in_array($prefix, $uniqueMp3Prefixes, true)) {
        $uniqueMp3Prefixes[] = $prefix;
    }
}

$mp3FilenamePrefixes = $uniqueMp3Prefixes;

if ($mp3FilenamePrefix === '' && ! empty($mp3FilenamePrefixes)) {
    $mp3FilenamePrefix = $mp3FilenamePrefixes[0];
}

$mp3Suggestions = buildFilenameSuggestions($audioSongsDirectory, $mp3FilenamePrefixes);
$mp3FilenameOptions = $mp3Suggestions['options'];
$matchingMp3Filenames = $mp3Suggestions['matching'];
$mp3DirectoryExists = $mp3Suggestions['directoryExists'];

$songIdValue = '';
if (is_array($songData) && array_key_exists('id', $songData)) {
    $songIdValue = (string) $songData['id'];
} else {
    $songIdValue = (string) $id;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Song <?php echo escapeHtml($songIdValue); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f7f7f2;
            color: #333;
        }
        .edit-song-container {
            max-width: 960px;
            margin: 0 auto;
        }
        h1 {
            font-size: 1.75rem;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
        }
        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #c5c5c5;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
            font-family: inherit;
        }
        .form-group textarea {
            min-height: 120px;
            resize: vertical;
            line-height: 1.4;
        }
        .form-note {
            margin-top: 6px;
            font-size: 0.9rem;
            color: #555;
        }
        .linked-meanings-summary {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #d0d0d0;
            border-radius: 4px;
            background-color: #ffffff;
            min-height: 44px;
            align-items: center;
            box-sizing: border-box;
        }
        .linked-meanings-summary .linked-meanings-empty {
            color: #666;
            font-size: 0.95rem;
        }
        .link-meanings-btn {
            margin-top: 2px;
            padding: 8px 16px;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid transparent;
            background-color: #1c6dd0;
            color: #fff;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .link-meanings-btn:hover {
            background-color: #1559a6;
        }
        .link-meanings-btn:focus {
            outline: 2px solid #0f3f7f;
            outline-offset: 2px;
        }
        .meaning-pill {
            display: inline-flex;
            align-items: center;
            padding: 6px 12px;
            border-radius: 999px;
            background-color: #e8f1ff;
            border: 1px solid #bcd4ff;
            font-size: 0.95rem;
            color: #1a3c6e;
        }
        .meaning-pill-title {
            font-weight: 600;
        }
        .meaning-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }
        .meaning-modal.is-open {
            display: flex;
        }
        .meaning-modal__backdrop {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.45);
        }
        .meaning-modal__dialog {
            position: relative;
            background-color: #ffffff;
            width: min(90%, 760px);
            max-height: 80vh;
            border-radius: 6px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            z-index: 1001;
        }
        .meaning-modal__header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 20px;
            border-bottom: 1px solid #e1e1e1;
        }
        .meaning-modal__header h2 {
            margin: 0;
            font-size: 1.3rem;
        }
        .meaning-modal__close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #555;
            line-height: 1;
        }
        .meaning-modal__close:hover {
            color: #000;
        }
        .meaning-modal__body {
            padding: 16px 20px;
            overflow-y: auto;
        }
        .meaning-modal__search {
            margin-bottom: 12px;
        }
        .meaning-modal__search input {
            width: 100%;
            padding: 9px 12px;
            border-radius: 4px;
            border: 1px solid #c5c5c5;
            font-size: 1rem;
            box-sizing: border-box;
        }
        .meaning-modal__search input:focus {
            outline: 2px solid #1c6dd0;
            outline-offset: 1px;
        }
        .meaning-modal__list {
            max-height: 48vh;
            overflow-y: auto;
            border: 1px solid #dcdcdc;
            border-radius: 4px;
            background-color: #fafafa;
        }
        .meaning-option {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 10px 12px;
            border-bottom: 1px solid #e5e5e5;
            cursor: pointer;
        }
        .meaning-option:last-child {
            border-bottom: none;
        }
        .meaning-option input[type="checkbox"] {
            margin-top: 4px;
            cursor: pointer;
        }
        .meaning-option-details {
            flex: 1;
        }
        .meaning-option-title {
            font-weight: 600;
            margin-bottom: 4px;
        }
        .meaning-option-text {
            font-size: 0.92rem;
            color: #555;
            white-space: pre-line;
        }
        .meaning-option--selected {
            background-color: #e9f7ef;
        }
        .meaning-modal__empty {
            padding: 16px;
            text-align: center;
            color: #666;
            font-size: 0.95rem;
        }
        .meaning-modal__footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            padding: 14px 20px;
            border-top: 1px solid #e1e1e1;
            background-color: #f7f7f7;
        }
        .meaning-modal__cancel,
        .meaning-modal__save {
            padding: 9px 18px;
            border-radius: 4px;
            border: 1px solid transparent;
            cursor: pointer;
            font-size: 1rem;
        }
        .meaning-modal__cancel {
            background-color: #f0f0f0;
            border-color: #ccc;
            color: #333;
        }
        .meaning-modal__cancel:hover {
            background-color: #e0e0e0;
        }
        .meaning-modal__save {
            background-color: #4CAF50;
            border-color: #4CAF50;
            color: #fff;
        }
        .meaning-modal__save:hover {
            background-color: #45a049;
        }
        .short-textarea {
            min-height: 80px;
        }
        .readonly-input {
            background-color: #f0f0f0;
            color: #555;
        }
        .button-row {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 24px;
        }
        .button-row button {
            padding: 10px 18px;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid transparent;
            cursor: pointer;
        }
        .button-row .delete-btn {
            background-color: #d9534f;
            border-color: #d43f3a;
            color: #fff;
        }
        .button-row .delete-btn:hover {
            background-color: #c9302c;
        }
        .button-row .save-btn {
            background-color: #4CAF50;
            border-color: #4CAF50;
            color: #fff;
        }
        .button-row .save-btn:hover {
            background-color: #45a049;
        }
        .button-row .cancel-btn {
            background-color: #f0f0f0;
            border-color: #ccc;
            color: #333;
        }
        .button-row .cancel-btn:hover {
            background-color: #e0e0e0;
        }
        .alert {
            padding: 12px 16px;
            border-radius: 4px;
            margin-bottom: 18px;
            border: 1px solid transparent;
        }
        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
        .alert-error {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="edit-song-container">
        <h1>Edit Song <?php echo escapeHtml($songIdValue); ?></h1>

        <?php if ($successMessage): ?>
            <div class="alert alert-success"><?php echo escapeHtml($successMessage); ?></div>
        <?php endif; ?>

        <?php if ($errorMessage): ?>
            <div class="alert alert-error"><?php echo escapeHtml($errorMessage); ?></div>
        <?php endif; ?>

        <?php if ($songData): ?>
            <form method="post" id="edit-song-form">
                <input type="hidden" name="id" value="<?php echo escapeHtml($songIdValue); ?>">

                <div class="form-group">
                    <label for="song-id">ID</label>
                    <input type="text" id="song-id" class="readonly-input" value="<?php echo escapeHtml($songIdValue); ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="song-title">Title</label>
                    <input type="text" id="song-title" name="title" value="<?php echo escapeHtml($songData['title'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label for="song-lyrics">Lyrics</label>
                    <textarea id="song-lyrics" name="lyrics" rows="12"><?php echo htmlspecialchars($songData['lyrics'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="song-lyrics-short">Lyrics (Short)</label>
                    <textarea id="song-lyrics-short" name="lyrics_short" class="short-textarea" rows="6"><?php echo htmlspecialchars($songData['lyrics_short'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="song-lyrics-paged">Lyrics (Paged)</label>
                    <textarea id="song-lyrics-paged" name="lyrics_paged" class="short-textarea" rows="6"><?php echo htmlspecialchars($songData['lyrics_paged'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="tabfilename">Tab Filename</label>
                    <input type="text" id="tabfilename" name="tabfilename" list="tabfilename-options" value="<?php echo escapeHtml($songData['tabfilename'] ?? ''); ?>">
                    <?php renderFilenameNote($matchingTabFilenames, $tabFilenameOptions, $tabFilenamePrefix, $tabDirectoryExists, 'img/songs/'); ?>
                </div>

                <datalist id="tabfilename-options">
                    <?php foreach ($tabFilenameOptions as $filenameOption): ?>
                        <option value="<?php echo escapeHtml($filenameOption); ?>"></option>
                    <?php endforeach; ?>
                </datalist>

                <div class="form-group">
                    <label for="mp3filename">MP3 Filename</label>
                    <input type="text" id="mp3filename" name="mp3filename" list="mp3filename-options" value="<?php echo escapeHtml($songData['mp3filename'] ?? ''); ?>">
                    <?php renderFilenameNote($matchingMp3Filenames, $mp3FilenameOptions, $mp3FilenamePrefix, $mp3DirectoryExists, 'audio/songs/'); ?>
                </div>

                <div class="form-group">
                    <label for="mp3filename2">MP3 Filename 2</label>
                    <input type="text" id="mp3filename2" name="mp3filename2" list="mp3filename-options" value="<?php echo escapeHtml($songData['mp3filename2'] ?? ''); ?>">
                    <?php renderFilenameNote($matchingMp3Filenames, $mp3FilenameOptions, $mp3FilenamePrefix, $mp3DirectoryExists, 'audio/songs/'); ?>
                </div>

                <datalist id="mp3filename-options">
                    <?php foreach ($mp3FilenameOptions as $filenameOption): ?>
                        <option value="<?php echo escapeHtml($filenameOption); ?>"></option>
                    <?php endforeach; ?>
                </datalist>

                <div class="form-group">
                    <label for="song-author">Author(s)</label>
                    <input type="text" id="song-author" name="author" value="<?php echo escapeHtml($songData['author'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label for="song-keywords">Keywords</label>
                    <input type="text" id="song-keywords" name="keywords" value="<?php echo escapeHtml($songData['keywords'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label>Linked Meanings</label>
                    <div class="linked-meanings-summary" id="selected-meanings-summary">
                        <?php if (! empty($selectedMeaningDetailsForDisplay)): ?>
                            <?php foreach ($selectedMeaningDetailsForDisplay as $meaningItem): ?>
                                <?php
                                    $meaningTitle = isset($meaningItem['title']) && $meaningItem['title'] !== ''
                                        ? $meaningItem['title']
                                        : ('Meaning #' . (isset($meaningItem['id']) ? $meaningItem['id'] : '?'));
                                ?>
                                <span class="meaning-pill">
                                    <span class="meaning-pill-title"><?php echo escapeHtml($meaningTitle); ?></span>
                                </span>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <span class="linked-meanings-empty">No meanings linked.</span>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="link-meanings-btn" id="open-meanings-modal">Link Meanings</button>
                    <input type="hidden" name="meaning_ids" id="meaning-ids-input" value="<?php echo escapeHtml($selectedMeaningIdsJson); ?>">
                </div>

                <div class="button-row">
                    <button type="button" class="cancel-btn" id="cancel-edit">Cancel</button>
                    <?php if ($songData && $songIdValue !== ''): ?>
                        <button type="button" class="delete-btn" id="delete-song">Delete</button>
                    <?php endif; ?>
                    <button type="submit" class="save-btn">Save</button>
                </div>
            </form>
            <div class="meaning-modal" id="meaning-modal" aria-hidden="true" role="dialog" aria-labelledby="meaning-modal-title">
                <div class="meaning-modal__backdrop" data-meaning-modal-dismiss="true"></div>
                <div class="meaning-modal__dialog">
                    <div class="meaning-modal__header">
                        <h2 id="meaning-modal-title">Link Meanings</h2>
                        <button type="button" class="meaning-modal__close" id="meaning-modal-close" aria-label="Close">&times;</button>
                    </div>
                    <div class="meaning-modal__body">
                        <div class="meaning-modal__search">
                            <input type="text" id="meaning-search" placeholder="Filter by title or meaning">
                        </div>
                        <div class="meaning-modal__list" id="meaning-options"></div>
                    </div>
                    <div class="meaning-modal__footer">
                        <button type="button" class="meaning-modal__cancel" id="meaning-modal-cancel">Cancel</button>
                        <button type="button" class="meaning-modal__save" id="meaning-modal-save">Save</button>
                    </div>
                </div>
            </div>
        <?php elseif (! $errorMessage): ?>
            <p>No song data available.</p>
        <?php endif; ?>
    </div>

    <script>
        (function() {
            var modalOrigin = window.location.origin || (window.location.protocol + '//' + window.location.host);
            var cancelButton = document.getElementById('cancel-edit');
            if (cancelButton) {
                cancelButton.addEventListener('click', function() {
                    if (window.parent && window.parent !== window) {
                        window.parent.postMessage({ type: 'closeEditModal' }, modalOrigin);
                    } else if (document.referrer) {
                        window.location.href = document.referrer;
                    } else {
                        window.location.href = 'index.html';
                    }
                });
            }

            var deleteButton = document.getElementById('delete-song');
            if (deleteButton) {
                var deleteUrl = <?php echo json_encode('deletesong.php?id=' . rawurlencode($songIdValue)); ?>;
                deleteButton.addEventListener('click', function() {
                    window.location.href = deleteUrl;
                });
            }

            var allMeaningsData = <?php echo $allMeaningsJson; ?>;
            var initialSelectedMeaningIds = <?php echo $selectedMeaningIdsJson; ?>;

            var meaningIdsInput = document.getElementById('meaning-ids-input');
            var summaryContainer = document.getElementById('selected-meanings-summary');
            var linkMeaningsButton = document.getElementById('open-meanings-modal');
            var modalElement = document.getElementById('meaning-modal');

            if (meaningIdsInput && summaryContainer && modalElement) {
                var modalBackdrop = modalElement.querySelector('.meaning-modal__backdrop');
                var modalCloseButton = document.getElementById('meaning-modal-close');
                var modalCancelButton = document.getElementById('meaning-modal-cancel');
                var modalSaveButton = document.getElementById('meaning-modal-save');
                var searchInput = document.getElementById('meaning-search');
                var meaningListContainer = document.getElementById('meaning-options');

                if (! Array.isArray(allMeaningsData)) {
                    allMeaningsData = [];
                }

                if (! Array.isArray(initialSelectedMeaningIds)) {
                    initialSelectedMeaningIds = [];
                }

                var meaningLookup = {};
                for (var i = 0; i < allMeaningsData.length; i++) {
                    var meaningEntry = allMeaningsData[i] || {};
                    if (typeof meaningEntry.id === 'undefined' || meaningEntry.id === null) {
                        continue;
                    }

                    var meaningKey = String(meaningEntry.id);
                    meaningLookup[meaningKey] = {
                        id: meaningEntry.id,
                        title: typeof meaningEntry.title === 'string' ? meaningEntry.title : '',
                        meaning: typeof meaningEntry.meaning === 'string' ? meaningEntry.meaning : ''
                    };
                }

                function addClass(element, className) {
                    if (! element || ! className) {
                        return;
                    }

                    if (element.classList) {
                        element.classList.add(className);
                    } else if (element.className.indexOf(className) === -1) {
                        element.className = (element.className ? element.className + ' ' : '') + className;
                    }
                }

                function removeClass(element, className) {
                    if (! element || ! className) {
                        return;
                    }

                    if (element.classList) {
                        element.classList.remove(className);
                    } else {
                        element.className = element.className.replace(new RegExp('\\b' + className + '\\b', 'g'), '').replace(/\s{2,}/g, ' ').trim();
                    }
                }

                function normalizeSelectedIds(ids) {
                    var normalized = [];

                    if (! Array.isArray(ids)) {
                        return normalized;
                    }

                    for (var i = 0; i < ids.length; i++) {
                        var value = ids[i];

                        if (value === null || typeof value === 'undefined') {
                            continue;
                        }

                        var stringValue = String(value);

                        if (stringValue === '') {
                            continue;
                        }

                        if (normalized.indexOf(stringValue) === -1) {
                            normalized.push(stringValue);
                        }
                    }

                    return normalized;
                }

                var selectedMeaningIds = normalizeSelectedIds(initialSelectedMeaningIds);
                var validatedSelection = [];
                for (var j = 0; j < selectedMeaningIds.length; j++) {
                    var selectionId = selectedMeaningIds[j];

                    if (Object.prototype.hasOwnProperty.call(meaningLookup, selectionId) && validatedSelection.indexOf(selectionId) === -1) {
                        validatedSelection.push(selectionId);
                    }
                }
                selectedMeaningIds = validatedSelection;

                var modalSelectionSnapshot = [];
                var modalIsOpen = false;

                function createSelectionSnapshot() {
                    return selectedMeaningIds.slice();
                }

                function restoreSelectionFromSnapshot(snapshot) {
                    selectedMeaningIds = normalizeSelectedIds(snapshot);
                    var revalidated = [];
                    for (var i = 0; i < selectedMeaningIds.length; i++) {
                        var id = selectedMeaningIds[i];
                        if (Object.prototype.hasOwnProperty.call(meaningLookup, id) && revalidated.indexOf(id) === -1) {
                            revalidated.push(id);
                        }
                    }
                    selectedMeaningIds = revalidated;
                }

                function syncHiddenInput() {
                    if (! meaningIdsInput) {
                        return;
                    }

                    var numericValues = [];
                    for (var i = 0; i < selectedMeaningIds.length; i++) {
                        var parsed = parseInt(selectedMeaningIds[i], 10);
                        if (! isNaN(parsed)) {
                            numericValues.push(parsed);
                        }
                    }

                    meaningIdsInput.value = JSON.stringify(numericValues);
                }

                function buildMeaningDisplayTitle(meaningData) {
                    if (! meaningData) {
                        return '';
                    }

                    if (meaningData.title && meaningData.title !== '') {
                        return meaningData.title;
                    }

                    var identifier = typeof meaningData.id !== 'undefined' ? meaningData.id : '';
                    return identifier !== '' ? 'Meaning #' + identifier : 'Meaning';
                }

                function updateSummary() {
                    if (! summaryContainer) {
                        return;
                    }

                    while (summaryContainer.firstChild) {
                        summaryContainer.removeChild(summaryContainer.firstChild);
                    }

                    var items = [];
                    for (var i = 0; i < selectedMeaningIds.length; i++) {
                        var id = selectedMeaningIds[i];
                        if (Object.prototype.hasOwnProperty.call(meaningLookup, id)) {
                            items.push(meaningLookup[id]);
                        }
                    }

                    if (items.length === 0) {
                        var emptyElement = document.createElement('span');
                        emptyElement.className = 'linked-meanings-empty';
                        emptyElement.textContent = 'No meanings linked.';
                        summaryContainer.appendChild(emptyElement);
                        return;
                    }

                    items.sort(function(a, b) {
                        var titleA = (a.title || '').toLowerCase();
                        var titleB = (b.title || '').toLowerCase();

                        if (titleA < titleB) {
                            return -1;
                        }

                        if (titleA > titleB) {
                            return 1;
                        }

                        return 0;
                    });

                    for (var i = 0; i < items.length; i++) {
                        var pill = document.createElement('span');
                        pill.className = 'meaning-pill';

                        var pillTitle = document.createElement('span');
                        pillTitle.className = 'meaning-pill-title';
                        pillTitle.textContent = buildMeaningDisplayTitle(items[i]);

                        pill.appendChild(pillTitle);
                        summaryContainer.appendChild(pill);
                    }
                }

                function renderMeaningList() {
                    if (! meaningListContainer) {
                        return;
                    }

                    while (meaningListContainer.firstChild) {
                        meaningListContainer.removeChild(meaningListContainer.firstChild);
                    }

                    var filterValue = '';
                    if (searchInput && typeof searchInput.value === 'string') {
                        filterValue = searchInput.value.trim().toLowerCase();
                    }

                    var matches = 0;

                    for (var i = 0; i < allMeaningsData.length; i++) {
                        var meaningEntry = allMeaningsData[i] || {};
                        if (typeof meaningEntry.id === 'undefined' || meaningEntry.id === null) {
                            continue;
                        }

                        var meaningId = String(meaningEntry.id);
                        var titleText = typeof meaningEntry.title === 'string' ? meaningEntry.title : '';
                        var meaningText = typeof meaningEntry.meaning === 'string' ? meaningEntry.meaning : '';
                        var searchableText = (titleText + ' ' + meaningText).toLowerCase();

                        if (filterValue && searchableText.indexOf(filterValue) === -1) {
                            continue;
                        }

                        matches++;

                        var optionLabel = document.createElement('label');
                        optionLabel.className = 'meaning-option';

                        var checkbox = document.createElement('input');
                        checkbox.type = 'checkbox';
                        checkbox.value = meaningId;
                        checkbox.checked = selectedMeaningIds.indexOf(meaningId) !== -1;

                        var detailsContainer = document.createElement('div');
                        detailsContainer.className = 'meaning-option-details';

                        var titleElement = document.createElement('div');
                        titleElement.className = 'meaning-option-title';
                        titleElement.textContent = titleText !== '' ? titleText : buildMeaningDisplayTitle({ id: meaningEntry.id, title: titleText });

                        detailsContainer.appendChild(titleElement);

                        if (meaningText !== '') {
                            var meaningTextElement = document.createElement('div');
                            meaningTextElement.className = 'meaning-option-text';
                            meaningTextElement.textContent = meaningText;
                            detailsContainer.appendChild(meaningTextElement);
                        }

                        optionLabel.appendChild(checkbox);
                        optionLabel.appendChild(detailsContainer);

                        if (checkbox.checked) {
                            addClass(optionLabel, 'meaning-option--selected');
                        }

                        (function(id, labelElement, checkboxElement) {
                            checkboxElement.addEventListener('change', function(event) {
                                if (event.target.checked) {
                                    if (selectedMeaningIds.indexOf(id) === -1) {
                                        selectedMeaningIds.push(id);
                                    }
                                    addClass(labelElement, 'meaning-option--selected');
                                } else {
                                    var removeIndex = selectedMeaningIds.indexOf(id);
                                    if (removeIndex !== -1) {
                                        selectedMeaningIds.splice(removeIndex, 1);
                                    }
                                    removeClass(labelElement, 'meaning-option--selected');
                                }
                            });
                        })(meaningId, optionLabel, checkbox);

                        meaningListContainer.appendChild(optionLabel);
                    }

                    if (matches === 0) {
                        var emptyMessage = document.createElement('div');
                        emptyMessage.className = 'meaning-modal__empty';

                        if (! allMeaningsData.length) {
                            emptyMessage.textContent = 'No meanings are available yet.';
                        } else {
                            emptyMessage.textContent = 'No meanings found for the current filter.';
                        }

                        meaningListContainer.appendChild(emptyMessage);
                    }
                }

                function openMeaningModal() {
                    modalSelectionSnapshot = createSelectionSnapshot();
                    if (searchInput) {
                        searchInput.value = '';
                    }
                    renderMeaningList();
                    addClass(modalElement, 'is-open');
                    modalElement.setAttribute('aria-hidden', 'false');
                    modalIsOpen = true;

                    if (searchInput) {
                        setTimeout(function() {
                            searchInput.focus();
                        }, 0);
                    }
                }

                function closeMeaningModal() {
                    removeClass(modalElement, 'is-open');
                    modalElement.setAttribute('aria-hidden', 'true');
                    modalIsOpen = false;
                    modalSelectionSnapshot = [];
                }

                function handleModalCancel() {
                    restoreSelectionFromSnapshot(modalSelectionSnapshot);
                    syncHiddenInput();
                    updateSummary();
                    closeMeaningModal();
                }

                function handleModalSave() {
                    syncHiddenInput();
                    updateSummary();
                    closeMeaningModal();
                }

                if (linkMeaningsButton) {
                    linkMeaningsButton.addEventListener('click', function() {
                        openMeaningModal();
                    });
                }

                if (modalBackdrop) {
                    modalBackdrop.addEventListener('click', function() {
                        handleModalCancel();
                    });
                }

                if (modalCloseButton) {
                    modalCloseButton.addEventListener('click', function() {
                        handleModalCancel();
                    });
                }

                if (modalCancelButton) {
                    modalCancelButton.addEventListener('click', function() {
                        handleModalCancel();
                    });
                }

                if (modalSaveButton) {
                    modalSaveButton.addEventListener('click', function() {
                        handleModalSave();
                    });
                }

                if (searchInput) {
                    searchInput.addEventListener('input', function() {
                        renderMeaningList();
                    });

                    searchInput.addEventListener('keydown', function(event) {
                        var key = event.key || event.keyCode;
                        if (key === 'Enter' || key === 13) {
                            event.preventDefault();
                        }
                    });
                }

                document.addEventListener('keydown', function(event) {
                    if (! modalIsOpen) {
                        return;
                    }

                    var key = event.key || event.keyCode;

                    if (key === 'Escape' || key === 'Esc' || key === 27) {
                        event.preventDefault();
                        handleModalCancel();
                    }
                });

                syncHiddenInput();
                updateSummary();
            }
        })();
    </script>

    <?php if ($updateSuccess): ?>
        <script>
            (function() {
                var modalOrigin = window.location.origin || (window.location.protocol + '//' + window.location.host);
                if (window.parent && window.parent !== window) {
                    window.parent.postMessage({ type: 'songUpdated', songId: <?php echo json_encode($id); ?> }, modalOrigin);
                }
            })();
        </script>
    <?php endif; ?>
</body>
</html>
