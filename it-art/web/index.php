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
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>IT-art - Jörg Eisfeld</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="de">
<meta name="audience" content="alle">
<meta name="description" content="IT-art, Jörg Eisfeld">
<meta name="keywords" content="Jörg Eisfeld, IT-art, Webdevelopment, Android-Apps, Design">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?=$basepath?>/stylesheets/styles.css" rel="Stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=$basepath?>/img/it-art.ico">
<script type="text/javascript" src="<?=$basepath?>/javascript/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?=$basepath?>/javascript/resolution.js"></script>
<?php
if ($page == "startseite") {
	?>
<script type="text/javascript" src="<?=$basepath?>/javascript/startpage.js"></script>
<?php
}
else if ($page == "musik") {
	?>
<script type="text/javascript" src="<?=$basepath?>/javascript/music.js"></script>
<?php
}
?>


</head>
<body class="<?=$page?>">
	<div id="toplogoframe" name="toplogoframe">
		<img id="logoimage" alt="Jörg Eisfeld - IT-art" src="<?=$basepath?>/img/logo-it-art_narrow.png">
	</div>
	<div id="bottomframe" name="bottomframe">
		<?php include ("bottom.php"); ?>
	</div>
	<div id="menuframe" name="menu">
		<?php include ("menu.php"); ?>
	</div>
	<div id="mainframe" name="main" class="<?=$page?>">
		<?php include ("subpages/".$page.".php"); ?>
	</div>
	<div id="popupframe" name="popup">
		<?php include ("subpages/impressum.php"); ?>
	</div>
</body>

</html>

