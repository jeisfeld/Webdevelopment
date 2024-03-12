<?php
require_once 'dbcredentials.php';

function getDbConnection() {
    $dbConnection = new mysqli(getDbServer(), getDbUser(), getDbPassword(), getDbName());
    setDbSchema($dbConnection);
    return $dbConnection;
}

function printError($errorCode, $errorMessage, $data = null) {
    $result = [
        'status' => 'error',
        'errorcode' => $errorCode,
        'errormessage' => $errorMessage
    ];
    if ($data) {
        foreach ($data as $key => $value) {
            $result[$key] = $value;
        }
    }
    die (json_encode($result, JSON_PRETTY_PRINT));
}

function printSuccess($keystatus, $data = null) {
    $result = [ 'status' => 'success', 'keystatus' => $keystatus ];
    if ($data) {
        foreach ($data as $key => $value) {
            $result[$key] = $value;
        }
    }
    echo json_encode($result, JSON_PRETTY_PRINT);
}

function checkUserKey($userKey, $androidId, $cryptStatus) {
	$conn = getDbConnection();
	
	if ($conn->connect_error) {
		printError(101, "Connection failed: " . $conn->connect_error);
	}
	
	$id = null;
	$firstuse = null;
	$lastuse = null;
	$countuse = null;
	$androididstatus = null;
	$stmt = $conn->prepare("SELECT id, firstuse, lastuse, countuse, status FROM aug_key_usage WHERE userkey = ? and android_id = ?");
	$stmt->bind_param("ss", $userKey, $androidId);
	$stmt->execute();
	$stmt->bind_result($id, $firstuse, $lastuse, $countuse, $androididstatus);
	if ($stmt->fetch()) {
		$stmt->close();
		$countuse++;
		$stmt = $conn->prepare("UPDATE aug_key_usage SET lastuse = CURRENT_TIMESTAMP, countuse = ? WHERE id = ?");
		$stmt->bind_param("ii", $countuse, $id);
		$stmt->execute();
		$stmt->close();
	}
	else {
		$stmt->close();
		$countuse=1;
		$stmt = $conn->prepare("INSERT INTO aug_key_usage (userkey, android_id, countuse) VALUES (?, ?, 1)");
		$stmt->bind_param("ss", $userKey, $androidId);
		$stmt->execute();
		$stmt->close();
	}
	
	$id = null;
	$topstatus = null;
	$stmt = $conn->prepare("SELECT id, status FROM aug_key_status WHERE userkey = ?");
	$stmt->bind_param("s", $userKey);
	$stmt->execute();
	$stmt->bind_result($id, $topstatus);
	$stmt->fetch();
	$stmt->close();
	$conn->close();
	
	if ($androididstatus) {
		return $androididstatus;
	}
	elseif ($topstatus) {
		return $topstatus;
	}
	else {
		return $cryptStatus;
	}
	
}

function consoleLog($debugData) {
    ob_start(); // Start output buffering
    print_r($debugData); // Print the object
    $debugDataAsString = ob_get_clean();
    echo "<script>console.log('Debug Data: " . json_encode($debugDataAsString) . "');</script>";
}

