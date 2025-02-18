<?php
header ( "Access-Control-Allow-Origin: *" );
header ( "Content-Type: application/json" );

// Include database config
require_once "db_config.php";

// Get query
$query = isset ( $_GET ['q'] ) ? trim ( $_GET ['q'] ) : "";
if ($query === "") {
	echo json_encode ( [ ] );
	exit ();
}

// Use regex to check if query is a valid ID (numeric OR numeric + single letter)
$is_valid_id = preg_match ( '/^\d+[a-zA-Z]?$/', $query );
$isSingleLetter = preg_match ( '/^[a-zA-Z]$/', $query );

error_log ( "Query string: " . $query );

// SQL Query
if ($is_valid_id) {
	// If searching by ID
	$sql = "SELECT id, title, text, tabfilename, mp3filename, author FROM songs WHERE id LIKE ? ORDER BY CAST(id AS UNSIGNED) ASC";
	$params = [ 
			"%" . $query . "%"
	];
	$types = "s";
}
else if ($query === "*") {
	$sql = "SELECT id, title, text, tabfilename, mp3filename, author FROM songs order by id";
}
else if ($isSingleLetter) {
	$sql = "SELECT id, title, text, author, tabfilename, mp3filename FROM songs
            WHERE title REGEXP CONCAT('(^| )', ?, '.*')
               OR text REGEXP CONCAT('(^| )', ?, '.*')
            ORDER BY CASE WHEN title REGEXP CONCAT('(^| )', ?, '.*') THEN 1 ELSE 2 END, CAST(id AS UNSIGNED) ASC";
	$params = [ 
			$query,
			$query,
			$query
	];
	$types = "sss";
}
else {
	// If searching by title/text
	$words = explode ( " ", $query );
	$conditions = [ ];
	$params = [ ];
	$types = "";

	foreach ( $words as $word ) {
		$conditions [] = "(title LIKE ? OR text LIKE ? OR author like ? OR keywords like ?)";
		$titleMatch [] = "IF(title LIKE ?, 1, 0)";
		$textMatch [] = "IF(text LIKE ?, 1, 0)";

		$params [] = "%" . $word . "%";
		$params [] = "%" . $word . "%";
		$params [] = "%" . $word . "%";
		$params [] = "%" . $word . "%";
		$params [] = "%" . $word . "%"; // Condition for ORDER BY (Title Match)
		$params [] = "%" . $word . "%"; // Condition for ORDER BY (Text Match)

		$types .= "ssssss";
	}

	$sql = "SELECT id, title, text, tabfilename, mp3filename, author,
                (" . implode(" + ", $titleMatch) . ") AS title_match_count,
                (" . implode(" + ", $textMatch) . ") AS text_match_count
            FROM songs
            WHERE " . implode(" AND ", $conditions) . "
            ORDER BY
                title_match_count DESC,  
                text_match_count DESC,
                CAST(id AS UNSIGNED) ASC";
}

// Execute SQL
$stmt = $conn->prepare ( $sql );
if ($params) {
	$stmt->bind_param ( $types, ...$params );
}
$stmt->execute ();
$result = $stmt->get_result ();

// Fetch data
$songs = [ ];
while ( $row = $result->fetch_assoc () ) {
	// Debugging: Print the returned text
	$songs [] = $row;
}
error_log ( "Result size for " . $query . ": " . count ( $songs ) );

// Return JSON
echo json_encode ( $songs );
$stmt->close ();
$conn->close ();
?>
