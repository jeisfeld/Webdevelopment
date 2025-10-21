<?php
// Assume $conn is your already established MySQLi connection
require_once "db_config.php";

// Query to fetch a random entry
$query = "SELECT text FROM ww_recommendations ORDER BY RAND() LIMIT 1";
$result = $conn->query ( $query );

// Fetch and process the text
$text = "No recommendations found.";
if ($result && $row = $result->fetch_assoc ()) {
	$text = $row ['text'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WW Empfehlungen</title>
<style>
html, body {
	height: 100%;
	margin: 0;
	font-family: sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #f0f0f0;
}

.content {
        position: relative;
        width: 100%;
        max-width: 1024px;
        max-height: 80%;
        text-align: center;
        font-size: clamp(1.2rem, 4vw, 2em);
        padding: 20px 20px 30px;
        box-sizing: border-box;
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow-y: auto;
}

.reload-button {
        position: absolute;
        top: 15px;
        right: 15px;
        background: transparent;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        color: #666;
        transition: color 0.2s ease;
}

.reload-button:hover,
.reload-button:focus {
        color: #000;
        outline: none;
}
</style>
</head>
<body>
        <div class="content">
                <button type="button" class="reload-button" onclick="location.reload();" aria-label="Seite neu laden">
                        &#x21bb;
                </button>
                <?= nl2br(htmlspecialchars($text)) ?>
        </div>
</body>
</html>
