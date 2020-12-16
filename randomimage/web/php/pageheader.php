<?PHP
if (! $page) {
	if (empty ( $_GET ["page"] )) {
		$page = "overview";
		$nopageselected = true;
	}
	else {
		$page = $_GET ["page"];
	}
}

$pagefull = $page . ".php";
$pagepathname = $nopageselected ? "" : $pagefull;

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

if ($mainfolder) {
	$path_prefix1 = "";
	$path_prefix2 = "$language/";
}
else {
	$path_prefix1 = "../";
	$path_prefix2 = "";
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
<link href="<?=$path_prefix1?>stylesheets/styles.css" rel="Stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=$path_prefix1?>drawable/icon_<?=$app?>.ico">
<script type="text/javascript" src="<?=$path_prefix1?>javascript/jquery-1.12.4.min.js"></script>
<script>
function toggleNavigation() {
	$("#navigationframe").toggleClass( "mobilenavigation" );
}
</script>
</head>
<body id="<?=$page?>">