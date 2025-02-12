<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Include database config
require_once "db_config.php";

// Get query
$query = isset($_GET['q']) ? trim($_GET['q']) : "";
if ($query === "") {
	echo json_encode([]);
	exit;
}

// Use regex to check if query is a valid ID (numeric OR numeric + single letter)
$is_valid_id = preg_match('/^\d+[a-zA-Z]?$/', $query);

// SQL Query
if ($is_valid_id) {
	// If searching by ID
	$sql = "SELECT id, title, text, tabfilename, mp3filename FROM songs WHERE id LIKE ? ORDER BY CAST(id AS UNSIGNED) ASC";
	$params = ["%" . $query . "%"];
	$types = "s";
} else {
	// If searching by title/text
	$words = explode(" ", $query);
	$conditions = [];
	$params = [];
	$types = "";
	
	foreach ($words as $word) {
		$conditions[] = "(title LIKE ? OR text LIKE ? OR author like ? OR keywords like ?)";
		$params[] = "%" . $word . "%";
		$params[] = "%" . $word . "%";
		$params[] = "%" . $word . "%";
		$params[] = "%" . $word . "%";
		$types .= "ssss";
	}
	
	$sql = "SELECT id, title, text, tabfilename, mp3filename, author FROM songs WHERE " . implode(" AND ", $conditions) . "
            ORDER BY CASE WHEN title LIKE ? THEN 1 WHEN text LIKE ? THEN 2 ELSE 3 END, CAST(id AS UNSIGNED) ASC";
	$params[] = "%" . $query . "%";
	$params[] = "%" . $query . "%";
	$types .= "ss";
}

// Execute SQL
$stmt = $conn->prepare($sql);
$stmt->bind_param($types, ...$params);
$stmt->execute();
$result = $stmt->get_result();

// Fetch data
$songs = [];
while ($row = $result->fetch_assoc()) {
	// Debugging: Print the returned text
	error_log("Fetched text for ID {$row['id']}: " . substr($row['text'], 0, 100)); // Logs first 100 chars
	$songs[] = $row;
}

// Return JSON
echo json_encode($songs);
$stmt->close();
$conn->close();
?>
