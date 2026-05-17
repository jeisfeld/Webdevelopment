<?php
require_once 'dbcredentials.php';

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


$key = @$_GET["key"];
$root = @$_POST["root"];
$masterKey = getDesKey();

if ($key) {
    echo validateKey($key, $masterKey) ? "Valid key" : "Invalid key";
}
elseif ($root) {
    echo $root . "-" . encryptAndHash($root, $masterKey);
}
else {
    ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Augendiagnose Key Generator</title>
</head>
<body>
    <form action="" method="POST">
        <label for="inputField">Enter name:</label>
        <input type="text" id="root" name="root" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
    
    <?php 
}
?>


