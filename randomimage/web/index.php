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
	else {
		$language = "en";
	}
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
if ($page == "navigation") {
	$pagefull = $page . ".php";
}
else {
	$pagefull = $page . ".html";
}

// Define some basic strings based on language
switch ($language) {
	case "de" :
		$title = "Überraschungsbild (Android App)";
		$description = "Überraschungsbild, Jörg Eisfeld";
		$keywords = "Jörg Eisfeld, Überraschungsbild, Zufallsbild, Zufallsfoto, Foto�berraschung, Überraschung, Android";
		break;
	case "en" :
		$title = "Surprise Image (Android App)";
		$description = "Surprise Image, Jörg Eisfeld";
		$keywords = "Jörg Eisfeld, Surprise Image, Random Image, Random Photo, Photo Surprise, Surprise, Android";
		break;
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
<link rel="shortcut icon" href="drawable/icon_randomimage.ico">
<script type="text/javascript" src="javascript/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="javascript/resolution.js"></script>
</head>
<body id="index">
<?php
if ($isMobile) {
	?>
	<iframe id="mobileheaderframe" name="mobileheaderframe" src="<?=$language."/header.php?style=mobile&page=".$page?>"
		scrolling="no" marginheight="0" marginwidth="0" frameborder="0"></iframe>
	<iframe id="mobileframe" src="<?=$language."/".$pagefull?>" name="main" marginheight="0" marginwidth="0"
		frameborder="0"></iframe>
<?php
}
else {
	?>
	<iframe id="headerframe" name="headerframe" src="<?=$language."/header.php?page=".$page?>" scrolling="no"
		marginheight="0" marginwidth="0" frameborder="0"></iframe>
	<iframe id="menuleftframe" src="<?=$language."/navigation.php?style=menu"?>" name="menu" marginheight="0" marginwidth="0"
		frameborder="0"></iframe>
	<iframe id="mainframe" src="<?=$language."/".$pagefull?>" name="main" marginheight="0" marginwidth="0" frameborder="0"></iframe>
<?php
}
?>
</body>

</html>
