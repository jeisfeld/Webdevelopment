<?php
require_once 'db_config.php';

$query = "SELECT id, title, text, source FROM ww_recommendations ORDER BY source ASC, id ASC";
$result = $conn->query($query);

$rows = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WW Empfehlungen - Tabelle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h1, h2, h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 12px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #f0f0f0;
        }

        tr.source-1 {
            background-color: #fffbf9;
        }

        tr.source-2 {
            background-color: #fff7f0;
        }

        .no-results {
            text-align: center;
            font-size: 1.1em;
            color: #666;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <h1>Empfehlungen für Workshopleiter:innen</h1>
    
    <h2>von <a href="https://www.christopher-gottwald.de/" target="_blank">Christopher Gottwald</a></h2>

    <h3><a href=".." target="_blank">Karte ziehen</a></h3>

    <?php if (count($rows) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Text</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr class="source-<?= (int) $row['source']; ?>">
                        <td><?= htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?= htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?= nl2br(htmlspecialchars($row['text'], ENT_QUOTES, 'UTF-8')); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="no-results">Keine Empfehlungen gefunden.</div>
    <?php endif; ?>
</body>
</html>
