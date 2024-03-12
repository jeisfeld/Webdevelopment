<?php
require_once '../dbfunctions.php';

// Create connection
$conn = getDbConnection();

// Check connection
if ($conn->connect_error) {
    printError(101, "Connection failed: " . $conn->connect_error);
}

// // sql to drop table aug_key_usage
// $sql = "DROP TABLE aug_key_usage";
//
// if ($conn->query($sql) !== TRUE) {
//     printError(103, "Error dropping table: " . $conn->error);
// }

// sql to create table aug_key_usage
$sql = "CREATE TABLE aug_key_usage (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userkey VARCHAR(200) NOT NULL,
android_id VARCHAR(20),
firstuse TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
lastuse TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
countuse INT(8) UNSIGNED DEFAULT 0,
status VARCHAR(20),
CONSTRAINT unique_userkey UNIQUE(userkey, android_id)
)";

if ($conn->query($sql) === TRUE) {
	echo "Created table aug_key_usage";
}
else {
	echo "Failed to create table aug_key_usage";
}

$conn->close();
