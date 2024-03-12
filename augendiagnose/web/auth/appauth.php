<?php
require_once 'dbcredentials.php';
require_once 'dbfunctions.php';
header('Content-Type: text/json');

function encryptAndHash($input, $keyBase64) {
	// Decode the base64 encoded key to binary
	$key = base64_decode($keyBase64);
	
	$blockSize = 8;
	$pad = $blockSize - (strlen($input) % $blockSize);
	$input .= str_repeat(chr($pad), $pad);
	$encrypted = openssl_encrypt($input, 'des-ecb', $key, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING);
	
	$hash = hash('md5', $encrypted, true);
	
	return substr(base64_encode($hash), 0, 8);
}

function validateKey($input, $keyBase64) {
	$index = strrpos($input, '-');
	if ($index > 0) {
		$name = substr($input, 0, $index);
		$hash = substr($input, $index + 1);
		return encryptAndHash($name, $keyBase64) === $hash;
	}
	else {
		return false;
	}
}

$userKey = @$_POST["userKey"];
$androidId = @$_POST["androidId"];
$masterKey = getDesKey();

if ($userKey && $androidId) {
	$cryptStatus = validateKey($userKey, $masterKey) ? "SUCCESS" : "FAILED";
	
	$status = checkUserKey($userKey, $androidId, $cryptStatus);
	
	printSuccess($status);
}
else {
	printError(101, "Missing userKey or androidId");
}


