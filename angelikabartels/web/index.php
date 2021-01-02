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
function setLinkClass($pagename, $currentpage, $twoline)
{
	if ($pagename == $currentpage) {
		if ($twoline) {
			echo ' class="chosen twoline"';
		}
		else {
			echo ' class="chosen"';
		}
	}
	else if ($twoline) {
		echo ' class="twoline"';
	}
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Spirituelle Seelenreise - Angelika Bartels</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="de">
<meta name="audience" content="alle">
<meta name="description" content="Angelika Bartels, Spirituelle Seelenreise">
<meta name="keywords"
	content="Angelika Bartels, Spirituelle Rückführung, Psychoenergetisches Atmen,
Leben zwischen den Leben, Seelenreise">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?=$basepath?>/stylesheets/styles.css" rel="Stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=$basepath?>/img/icon_schwan.ico">
<script type="text/javascript" src="<?=$basepath?>/javascript/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?=$basepath?>/javascript/resolution.js"></script>
</head>
<body id="index" class="<?=$page?>">
	<div id="toplogoframe" name="toplogoframe">
		<img id="logoimage" alt="Spirituelle Rückführung" src="<?=$basepath?>/img/logo_breit.jpg">
		<a id="menubutton" href="javascript:toggleMenu()">
			<img src="<?=$basepath?>/img/icon_menu_white.png" class="icon">
		</a>
	</div>
	<div id="menuframe" name="menu">
		<?php include ("menu.php"); ?>
	</div>
	<div id="mainframe" name="main">
		<?php include ("subpages/".$page.".php"); ?>
		<hr id="endmenuseparator">
		<div id="endmenu">
			<h3>Inhalt</h3>
			<ul>
			<?php include ("menu.php");?>
			</ul>
		</div>
	</div>
	<div id="bottomframe" name="bottomframe">
		<?php include ("bottom.php"); ?>
	</div>
	<div id="popupframe" name="popup" data-link="subpages/impressum.php">
		<?php include ("subpages/impressum.php"); ?>
	</div>
</body>

</html>

