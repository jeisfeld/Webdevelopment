<?php
$basepath = rtrim ( dirname ( $_SERVER ['PHP_SELF'] ), '/\\' );

if (! isset ( $page )) {
	if (empty ( $_GET ["page"] )) {
		$page = "startseite";
	}
	else {
		$page = $_GET ["page"];
	}
}
function createMenuLink($basepath, $pagename, $currentpage, $pagetext, $position) {
	echo '<a href="' . $basepath . '/' . $pagename . '/" id="link' . $pagename . '" ';
	if ($pagename == $currentpage) {
		echo 'class="' . $position . ' chosen"';
	}
	else {
		echo 'class="' . $position . '"';
	}
	echo ">" . $pagetext . "</a>\n";
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Sybille Schraml - Naturheilkunde Praxis - Dantestrasse 29 - 80637 München - U1 Westfriedhof</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="de">
<meta name="audience" content="alle">
<meta name="description" content="Sybille Schraml, Naturheilkunde Praxis, München">
<meta name="keywords"
	content="Naturheilkunde, Bioresonanz, Testung, Farblichttherapie, Hakomi, München, Sybille Schraml, Heikpraktiker">
<meta name="keywords"
	content="Naturheilkunde, München, Bioresonanz, Chinesische Medizin, Chinesische Heilmethode, Chinesische Heilkunde, TCM,
Farblichttherapie, Hakomi, Testung, Zungen- und Pulsdiagnose, Entgiftung, Yin-Yang,
Schmerztherapie, Ernaehrungsberatung, Naturheilkundliche Stoffwechselregulation, Heilpraktiker">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="<?=$basepath?>/img/sybille.ico">
<link href="<?=$basepath?>/stylesheets/styles.css" rel="Stylesheet" type="text/css">
<script type="text/javascript" src="<?=$basepath?>/javascript/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?=$basepath?>/javascript/resolution.js"></script>
</head>
<!-- 
<script type="text/javascript" src="<?=$basepath?>/javascript/menudropdown.js"></script>
<script type="text/javascript" src="<?=$basepath?>/javascript/menu.js"></script>
 -->
<body id="index" class="<?=$page?>">
	<div id="toplogoframe" name="toplogoframe">
		<img src="<?=$basepath?>/img/logo_wide.png" alt="Sybille Schraml" id="logoimage">
		<a id="menubutton" href="javascript:toggleMenu()">
			<img src="<?=$basepath?>/img/icon_menu_green.png" class="icon">
		</a>
	</div>
	<div id="menuframe" name="menu">
		<?php include ("navigation/menu.php"); ?>
	</div>
	<div id="menutopframe" name="menutop">
		<?php include ("navigation/menu.php"); ?>
	</div>
	<div id="mainframe" name="main">
		<?php include ("subpages/".$page.".php"); ?>
		<hr id="endmenuseparator">
		<div id="endmenu">
			<h3>Inhalt</h3>
			<?php include ("navigation/menu.php");?>
		</div>
	</div>
	<div id="bottomframe" name="bottomframe">
		<?php include ("navigation/bottom.php"); ?>
	</div>
	<div id="popupframe" name="popup">
		<?php include ("subpages/impressum.php"); ?>
	</div>
</body>
</html>
