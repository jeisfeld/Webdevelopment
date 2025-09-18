<?php
$users = [
                'admin' => '$2y$12$yamJkQ/GtsK4EOMaiuuwguf8nU1t6JrBX9z.2T/PmUegimVIta3rO'
];

$realm = 'Heilsame Lieder Admin';
$debugMode = isset($_GET['debug']) && $_GET['debug'] === '1';
$debugLogFile = __DIR__ . '/auth-debug.log';

if (! function_exists('writeAuthDebugLog')) {
        function writeAuthDebugLog($file, $message) {
                $logEntry = '[' . date('c') . '] ' . $message . PHP_EOL;
                if (@file_put_contents($file, $logEntry, FILE_APPEND | LOCK_EX) === false) {
                        error_log('Failed to write admin auth debug log: ' . $message);
                }
        }
}

if (! isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
        if ($debugMode) {
                writeAuthDebugLog($debugLogFile, 'Missing credentials - no Authorization header present.');
        }

        header('WWW-Authenticate: Basic realm="' . $realm . '"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Authentication required.';
        if ($debugMode) {
                echo ' (Debug mode active - check ' . basename($debugLogFile) . ' for details.)';
        }
        exit();
}

$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];
$userExists = array_key_exists($username, $users);
$passwordHashInfo = $userExists ? password_get_info($users[$username]) : null;
$passwordVerified = $userExists ? password_verify($password, $users[$username]) : false;

if ($debugMode) {
        $remoteAddress = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown';
        $logDetails = [
                "user={$username}",
                'ip=' . $remoteAddress,
                'userExists=' . ($userExists ? 'true' : 'false'),
                'passwordVerified=' . ($passwordVerified ? 'true' : 'false'),
                'passwordLength=' . strlen($password)
        ];

        if ($passwordHashInfo !== null) {
                $logDetails[] = 'hashAlgo=' . ($passwordHashInfo['algoName'] ?? 'unknown');
                if (! empty($passwordHashInfo['options'])) {
                        $logDetails[] = 'hashOptions=' . json_encode($passwordHashInfo['options']);
                }
        }

        writeAuthDebugLog($debugLogFile, 'Login attempt: ' . implode(', ', $logDetails));
}

if (! $userExists || ! $passwordVerified) {
        if (! $debugMode) {
                header('WWW-Authenticate: Basic realm="' . $realm . '"');
        }

        header('HTTP/1.0 401 Unauthorized');
        if ($debugMode) {
                header('Content-Type: text/plain; charset=UTF-8');
                echo "Authentication failed.\n";
                echo 'User exists: ' . ($userExists ? 'yes' : 'no') . "\n";
                echo 'Password verified: ' . ($passwordVerified ? 'yes' : 'no') . "\n";
                echo 'Password length: ' . strlen($password) . "\n";

                if ($passwordHashInfo !== null) {
                        echo 'Hash algorithm: ' . ($passwordHashInfo['algoName'] ?? 'unknown') . "\n";
                        if (! empty($passwordHashInfo['options'])) {
                                echo 'Hash options: ' . json_encode($passwordHashInfo['options']) . "\n";
                        }
                }

                echo 'Further details were written to ' . basename($debugLogFile) . ".\n";
                echo 'Disable debug mode when you are finished troubleshooting.';
        } else {
                echo 'Invalid credentials.';
        }

        exit();
}

header('Cache-Control: no-store');
?>
<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns#">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords"
	content="Heilsame Lieder, Kreiskultur, Musik, Singen, Gitarre, Mantras, Mantren, Chants, Chanten, Chanting, Music, Singing, Guitar, Singkreis">
<meta name="description"
	content="Ein Archiv Heilsamer Lieder für Singkreise - Texte, Akkorde und Demoaufnahmen zum Lernen" />
<meta property="og:url" content="https://heilsame-lieder.de/" />
<meta property="og:title" content="Heilsame Lieder" />
<meta property="og:description"
	content="Ein Archiv Heilsamer Lieder für Singkreise - Texte, Akkorde und Demoaufnahmen zum Lernen" />
<meta property="og:image" content="https://heilsame-lieder.de/img/heilsame_lieder_grafik2.jpg" />
<title>Heilsame Lieder</title>
<link rel="stylesheet" href="/css/songbook.css">
<style>
</style>
</head>
<body class="admin-view">

	<div class="container">
		<div class="page-heading">
			<img src="/img/logo4a.png" alt="Icon" class="heading-icon">
			<h2 id="heilsame-lieder">Heilsame Lieder</h2>
			<img src="/img/logo4a.png" alt="Icon" class="heading-icon">
		</div>

		<!-- Search Box with Local PNG Icon -->
		<div class="search-container">
			<img src="/img/search2.png" alt="Search"> <input type="text" id="searchBox" placeholder="Search..."
				oninput="toggleClearButton()" onkeyup="searchSongs()">
			<button id="clearButton" onclick="clearSearch()">✕</button>
		</div>

		<!-- Table for Results -->
		<table>
			<thead>
				<tr>
					<th id="id">ID</th>
					<th id="title">Title</th>
					<th id="author" class="author-col">Author(s)</th>
					<th id="actions">Actions</th>
				</tr>
			</thead>
			<tbody id="results"></tbody>
		</table>
	</div>


	<!-- Popup Container -->
	<div id="popup" class="popup" style="display: none;">
		<div class="popup-content">
			<span class="popup-close" onclick="closePopup('popup')">&times;</span>
			<div id="popup-body"></div>
		</div>
	</div>
	<div id="popup2" class="popup" style="display: none;">
		<div class="popup-content">
			<span class="popup-close" onclick="closePopup('popup2')">&times;</span>
			<div id="popup2-body"></div>
		</div>
	</div>

	<a href="https://play.google.com/store/apps/details?id=de.jeisfeld.songarchive" class="androidapp" id="androidapp-link"
		target="_blank">Android App</a>

	<a href="/impressum.html" class="impressum" id="impressum-link">Imprint</a>

	<!-- Modal Structure -->
	<div id="modal-main" class="modal">
		<div class="modal-content">
			<!-- A close button and a placeholder; content will be loaded here -->
			<span class="modal-close" id="close-modal">&times;</span>
			<div id="modal-content">
				<!-- Impressum content from impressum.html will appear here -->
			</div>
		</div>
	</div>

	<script src="/js/songbook.js"></script>
</body>
</html>