<?PHP
header ( 'Content-Type: text/html; charset=utf-8' );

// Determine if running on mobile device
include 'Mobile_Detect.php';
$detect = new Mobile_Detect ();
$isMobile = $detect->isMobile () && ! $detect->isTablet ();

// Determine language
if (! empty ( $_GET ["lang"] )) {
	$language = $_GET ["lang"];
}
else {
	if (strstr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], "de" )) {
		$language = "de";
	}
	else if (strstr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], "es" )) {
		$language = "es";
	}
	else if (strstr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], "pt" )) {
		$language = "pt";
	}
	else {
		$language = "en";
	}
}

// Define some basic strings based on host
include "php/pageheader.php";

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

// Determine page
if (empty ( $_GET ["page"] )) {
	if ($isMobile) {
		$page = "navigation";
	}
	else {
		$page = "overview";
	}
}
else {
	$page = $_GET ["page"];
}

$pagefull = $page . ".php";

if (! empty ( $_GET ["anchor"] )) {
	$pagefull = $pagefull . "#" . $_GET ["anchor"];
}

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
<link href="stylesheets/styles.css" rel="Stylesheet" type="text/css">
<link rel="shortcut icon" href="drawable/icon_<?=$app?>.ico">
<script type="text/javascript" src="javascript/jquery-1.12.4.min.js"></script>
</head>
<body id="index">
<?php
if ($isMobile) {
	?>
	<div id="mobileheaderframe" name="mobileheaderframe">
		<?php include ("./".$language."/header.php"); ?>
	</div>
	<div id="mobileframe" name="main">
		<?php include ("./".$language."/".$pagefull); ?>
	</div>
<?php
}
else {
	?>
	<div id="headerframe" name="headerframe">
		<?php include ("./".$language."/header.php"); ?>
	</div>
	<div id="menuleftframe" name="menu">
		<?php include ("./".$language."/navigation.php"); ?>
	</div>
	<div id="mainframe" name="main">
		<?php include ("./".$language."/".$pagefull); ?>
	</div>
<?php
}
?>
</body>

</html>
