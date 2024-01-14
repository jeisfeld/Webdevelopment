<?PHP
$basepath = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

// Determine language
if (! empty ( $_GET ["lang"] )) {
	$language = $_GET ["lang"];
}
else {
	if (strstr ( @$_SERVER ['HTTP_ACCEPT_LANGUAGE'], "de" )) {
		$language = "de";
	}
	else if (strstr ( @$_SERVER ['HTTP_ACCEPT_LANGUAGE'], "es" )) {
		$language = "es";
	}
	else if (strstr ( @$_SERVER ['HTTP_ACCEPT_LANGUAGE'], "pt" )) {
		$language = "pt";
	}
	else {
		$language = "en";
	}
}

if (isset($page)) {
	$nopageselected = false;
}
else {
	if (empty ( $_GET ["page"] )) {
		$page = "overview";
		$nopageselected = true;
	}
	else {
		$page = $_GET ["page"];
		$nopageselected = false;
	}
}

$pagefull = $page . ".php";
$pagepathname = $nopageselected ? "" : $page . "/";
$urlprefix = $basepath;

// Determine Miniris vs Augendiagnose
if (array_key_exists("app", $_GET) && $_GET ["app"] == "miniris") {
	$app = "miniris";
	$appname = "Miniris";
	$urlprefix .= "/miniris";
}
else if (strpos ( $_SERVER ['REQUEST_URI'], '/miniris' ) !== false) {
	$app = "miniris";
	$appname = "Miniris";
	$urlprefix .= "/miniris";
}
else {
	switch ($_SERVER ['HTTP_HOST']) {
		case "miniris.jeisfeld.de" :
		case "miniris.localhost" :
		case "localhost:8007" :
		case "127.0.0.1:8007" :
			$app = "miniris";
			$appname = "Miniris";
			$urlprefix .= "/miniris";
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

if (array_key_exists("createHtmlString", $_GET)) {
	include ($language . "/" . $pagefull);
}
else {
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
<link href="<?=$basepath?>/stylesheets/styles.css" rel="Stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=$basepath?>/drawable/icon_<?=$app?>.ico">
<script type="text/javascript" src="<?=$basepath?>/javascript/jquery-3.5.1.min.js"></script>
<script>
function toggleNavigation() {
	$("#navigationframe").toggleClass( "mobilenavigation" );
}
</script>
</head>
<body>
	<div id="headerframe" name="headerframe">
		<?php include ($language."/header.php"); ?>
	</div>
	<div id="navigationframe" name="menu" class="desktop">
		<?php include ($language."/navigation.php"); ?>
	</div>
	<div id="mainframe" name="main">
		<?php include ($language."/".$pagefull); ?>
	</div>
<?php
	if ($nopageselected) {
		?>
<script>
	$("#navigationframe").addClass( "startup" );
	$("#mainframe").addClass( "startup" );
</script>
<?php
	}
	?>
</body>
</html>
<?php
}
?>
