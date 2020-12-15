<?PHP
header ( 'Content-Type: text/html; charset=utf-8' );

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
	else {
		$language = "en";
	}
}

// Determine page
if (empty ( $_GET ["page"] )) {
	$page = "overview";
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
		$title = "Zufallsbild (Android App)";
		$description = "Zufallsbild, Jörg Eisfeld";
		$keywords = "Jörg Eisfeld, Überraschungsbild, Zufallsbild, Zufallsfoto, Fotoüberraschung, Android";
		break;
	case "en" :
		$title = "Random Image (Android App)";
		$description = "Random Image, Jörg Eisfeld";
		$keywords = "Jörg Eisfeld, Surprise Image, Random Image, Random Photo, Photo Surprise, Android";
		break;
	case "es" :
		$title = "Imagen Aleatoria (Aplicación de Android)";
		$description = "Imagen Aleatoria, Jörg Eisfeld";
		$keywords = "Jörg Eisfeld, Imagen Sorpresa, Imagen Aleatoria, Foto Aleatoria, Foto Sorpresa, Android";
		break;
}

if (! empty ( $_GET ["anchor"] )) {
	$pagefull = $pagefull . "#" . $_GET ["anchor"];
}

?>
<!DOCTYPE html>
<html lang="<?=$language?>">
<head>
<title><?=$title?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="<?=$language?>">
<meta name="description" content="<?=$description?>">
<meta name="keywords" content="<?=$keywords?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="stylesheets/styles.css" rel="Stylesheet" type="text/css">
<link rel="shortcut icon" href="drawable/icon_randomimage.ico">
<script type="text/javascript" src="javascript/jquery-1.12.4.min.js"></script>
</head>
<body id="index">
	<div id="headerframe" name="headerframe">
		<?php include ("./".$language."/header.php"); ?>
	</div>
	<div id="mainframe" name="main">
		<?php include ("./".$language."/".$pagefull); ?>
	</div>
	<div id="menuleftframe" name="menu" class="desktop">
		<?php include ("./".$language."/navigation.php"); ?>
	</div>
</body>

</html>
