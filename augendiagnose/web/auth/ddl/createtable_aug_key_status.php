<?php
require_once '../dbfunctions.php';

// Create connection
$conn = getDbConnection();

// Check connection
if ($conn->connect_error) {
    printError(101, "Connection failed: " . $conn->connect_error);
}

// // sql to drop table aug_key_status
// $sql = "DROP TABLE aug_key_status";
//
// if ($conn->query($sql) !== TRUE) {
//     printError(103, "Error dropping table: " . $conn->error);
// }

// sql to create table aug_key_status
$sql = "CREATE TABLE aug_key_status (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userkey VARCHAR(200) NOT NULL,
status VARCHAR(20),
CONSTRAINT unique_userkey UNIQUE(userkey)
)";

if ($conn->query($sql) === TRUE) {
	echo "Created table aug_key_status";
}
else {
	echo "Failed to create table aug_key_status";
}

$conn->close();
