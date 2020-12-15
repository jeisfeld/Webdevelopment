<?PHP
$pagefull = $page . ".php";

// Determine Miniris vs Augendiagnose
if ($_GET ["app"] == "miniris") {
	$app = "miniris";
	$appname = "Miniris";
}
else if (strpos ( $_SERVER ['REQUEST_URI'], '/miniris' ) !== false) {
	$app = "miniris";
	$appname = "Miniris";
}
else {
	switch ($_SERVER ['HTTP_HOST']) {
		case "miniris.jeisfeld.de" :
		case "miniris.localhost" :
		case "localhost:8308" :
		case "127.0.0.1:8308" :
		case "pc-joerg:8308" :
		case "192.168.1.5:8308" :
		case "localhost:8007" :
		case "127.0.0.1:8007" :
		case "pc-joerg:8007" :
		case "192.168.1.5:8007" :
			$app = "miniris";
			$appname = "Miniris";
			break;
		default :
			$app = "augendiagnose";
			switch ($language) {
				case "de" :
					$appname = "Augendiagnose";
					break;
				case "en" :
					$appname = "Eye Diagnosis";
					break;
				case "es" :
				case "pt" :
					$appname = "Diagnóstico ocular";
					break;
			}
			break;
	}
}

function isAugendiagnose() {
	global $app;
	return $app == "augendiagnose";
}
function isMiniris() {
	global $app;
	return $app == "miniris";
}

// Define some basic strings based on language
switch ($language) {
	case "de" :
		$title = "${appname} (Android App)";
		$description = "${appname}, Jörg Eisfeld";
		$keywords = "Jörg Eisfeld, Augendiagnose, Irisdiagnose, Iridologie, Android";
		break;
	case "en" :
		$title = "${appname} (Android App)";
		$description = "${appname}, Jörg Eisfeld";
		$keywords = "Jörg Eisfeld, Eye Diagnosis, Iris Diagnosis, Iridology, Android";
		break;
	case "es" :
		$title = "${appname} (Aplicación para Android)";
		$description = "${appname}, Jörg Eisfeld";
		$keywords = "Jörg Eisfeld, Diagnóstico ocular, Iridología, Android";
		break;
	case "pt" :
		$title = "${appname} (Aplicação Android)";
		$description = "${appname}, Jörg Eisfeld";
		$keywords = "Jörg Eisfeld, Diagnóstico ocular, Iridologia, Android";
		break;
}

if ($index) {
	$path_prefix1="";
	$path_prefix2="$language/";
}
else {
	$path_prefix1="../";
	$path_prefix2="";
}

if (! $_GET ["createHtmlString"]) {
?>
<!DOCTYPE html>
<html lang="<?=$language?>">
<head>
<title><?=$title?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Language" content="<?=$language?>">
<meta name="description" content="<?=$description?>">
<meta name="keywords" content="<?=$keywords?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?=$path_prefix1?>stylesheets/styles.css" rel="Stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=$path_prefix1?>drawable/icon_<?=$app?>.ico">
<script type="text/javascript" src="<?=$path_prefix1?>javascript/jquery-1.12.4.min.js"></script>
</head>
<body>
<?php 
}
?>
