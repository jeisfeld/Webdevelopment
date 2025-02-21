<?php
header ( "Access-Control-Allow-Origin: *" );
header ( "Content-Type: application/json" );

// Include database config
require_once "db_config.php";

// Get query
$query = isset ( $_GET ['q'] ) ? trim ( $_GET ['q'] ) : "";

// Use regex to check if query is a valid ID (numeric OR numeric + single letter)
$is_valid_id = preg_match ( '/^\d+[a-zA-Z]?$/', $query );
$isSingleLetter = preg_match ( '/^[a-zA-Z]$/', $query );

// SQL Query
if ($is_valid_id) {
	// If searching by ID
	$sql = "SELECT id, title, text, tabfilename, mp3filename, mp3filename2, author FROM songs WHERE id LIKE ? ORDER BY CAST(id AS UNSIGNED) ASC";
	$params = [ 
			"%" . $query . "%"
	];
	$types = "s";
}
else if ($query === "*" || $query === "") {
	$sql = "SELECT id, title, text, tabfilename, mp3filename, mp3filename2, author FROM songs order by id";
}
else if ($isSingleLetter) {
	$sql = "SELECT id, title, text, author, tabfilename, mp3filename, mp3filename2, author FROM songs
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
	$normalizedQuery = str_replace ( [ 
			"´",
			"`",
			"’"
	], "'", $query );

	$words = explode ( " ", $normalizedQuery );
	$conditions = [ ];
	$titleMatch = [ ];
	$textMatch = [ ];
	$selectParams = [ ];
	$whereParams = [ ];
	$types = "";

	$normalizedTitle = "REPLACE(REPLACE(REPLACE(title, '´', ''''), '`', ''''), '’', '''')";
	$normalizedText = "REPLACE(REPLACE(REPLACE(text, '´', ''''), '`', ''''), '’', '''')";

	// Full-string match (apply replacement)
	$fullMatchTitle = "IF($normalizedTitle LIKE ?, 1, 0)";
	$fullMatchText = "IF($normalizedText LIKE ?, 1, 0)";

	// Full phrase match params
	$selectParams [] = "%" . $normalizedQuery . "%"; // Full match title
	$selectParams [] = "%" . $normalizedQuery . "%"; // Full match text
	$types .= "ss";

	// Process each word separately for WHERE and ORDER BY
	foreach ( $words as $word ) {
		// WHERE conditions
		$conditions [] = "($normalizedTitle LIKE ? OR $normalizedText LIKE ? OR author LIKE ? OR keywords LIKE ?)";
		$whereParams [] = "%" . $word . "%";
		$whereParams [] = "%" . $word . "%";
		$whereParams [] = "%" . $word . "%";
		$whereParams [] = "%" . $word . "%";
		$types .= "ssss";

		// ORDER BY conditions
		$titleMatch [] = "IF($normalizedTitle LIKE ?, 1, 0)";
		$textMatch [] = "IF($normalizedText LIKE ?, 1, 0)";
		$selectParams [] = "%" . $word . "%"; // Title match
		$selectParams [] = "%" . $word . "%"; // Text match
		$types .= "ss";
	}

	// Construct SQL query with ranking priority
	$sql = "SELECT id, title, text, tabfilename, mp3filename, mp3filename2, author, keywords,
                ($fullMatchTitle) AS full_title_match,
                ($fullMatchText) AS full_text_match,
                (" . implode ( " + ", $titleMatch ) . ") AS title_match_count,
                (" . implode ( " + ", $textMatch ) . ") AS text_match_count
            FROM songs
            WHERE " . implode ( " AND ", $conditions ) . "
            ORDER BY
                full_title_match DESC,
                full_text_match DESC,
                title_match_count DESC,
                text_match_count DESC,
                id ASC";

	$params = array_merge ( $selectParams, $whereParams );
}

// Execute SQL
$stmt = $conn->prepare ( $sql );
if (@$params) {
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
//error_log ( "SQL: " . $sql );
//error_log ( "Params: " . json_encode ( @$params ) );

// Return JSON
echo json_encode ( $songs );
$stmt->close ();
$conn->close ();
?>
