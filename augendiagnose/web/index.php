<?PHP
$basepath = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

// Determine language with whitelist to avoid script injection
$allowedLanguages = array("de", "en", "es", "pt", "fr");
if (!empty($_GET["lang"]) && in_array($_GET["lang"], $allowedLanguages, true)) {
        $language = $_GET["lang"];
} else {
        if (strstr(@$_SERVER['HTTP_ACCEPT_LANGUAGE'], "de")) {
                $language = "de";
        } elseif (strstr(@$_SERVER['HTTP_ACCEPT_LANGUAGE'], "es")) {
                $language = "es";
        } elseif (strstr(@$_SERVER['HTTP_ACCEPT_LANGUAGE'], "pt")) {
                $language = "pt";
        } elseif (strstr(@$_SERVER['HTTP_ACCEPT_LANGUAGE'], "fr")) {
                $language = "fr";
        } else {
                $language = "en";
        }
}

$allowedPages = array(
        "overview",
        "display_photos",
        "organize_photos",
        "settings",
        "windowsapp",
        "downloads",
        "impressum"
);

if (isset($page)) {
        $nopageselected = false;
} else {
        if (empty($_GET["page"])) {
                $page = "overview";
                $nopageselected = true;
        } else {
                $page = $_GET["page"];
                if (!in_array($page, $allowedPages, true)) {
                        $page = "overview";
                }
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
				case "fr" :
					$appname = "Diagnostic oculaire";
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
	case "fr" :
		$title = "${appname} (Application Android)";
		$description = "${appname}, Jörg Eisfeld";
		$keywords = "Jörg Eisfeld, Diagnostic oculaire, Iridologie, Android";
		break;
}

if (array_key_exists("createHtmlString", $_GET)) {
	include ($language . "/" . $pagefull);
}
else {
	?>

<!DOCTYPE html>
<html lang="<?=htmlspecialchars($language, ENT_QUOTES, 'UTF-8')?>">
<head>
<title><?=htmlspecialchars($title, ENT_QUOTES, 'UTF-8')?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="<?=htmlspecialchars($language, ENT_QUOTES, 'UTF-8')?>">
<meta name="description" content="<?=htmlspecialchars($description, ENT_QUOTES, 'UTF-8')?>">
<meta name="keywords" content="<?=htmlspecialchars($keywords, ENT_QUOTES, 'UTF-8')?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?=htmlspecialchars($basepath, ENT_QUOTES, 'UTF-8')?>/stylesheets/styles.css" rel="Stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=htmlspecialchars($basepath, ENT_QUOTES, 'UTF-8')?>/drawable/icon_<?=htmlspecialchars($app, ENT_QUOTES, 'UTF-8')?>.ico">
<script type="text/javascript" src="<?=htmlspecialchars($basepath, ENT_QUOTES, 'UTF-8')?>/javascript/jquery-3.5.1.min.js"></script>
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
