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

// SQL Query
if (is_numeric($query)) {
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
		$conditions[] = "(title LIKE ? OR text LIKE ?)";
		$params[] = "%" . $word . "%";
		$params[] = "%" . $word . "%";
		$types .= "ss";
	}
	
	$sql = "SELECT id, title, text, tabfilename, mp3filename FROM songs WHERE " . implode(" AND ", $conditions) . "
            ORDER BY CASE WHEN title LIKE ? THEN 1 ELSE 2 END, CAST(id AS UNSIGNED) ASC";
	$params[] = "%" . $query . "%";
	$types .= "s";
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
