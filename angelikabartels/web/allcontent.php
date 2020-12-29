<?php 
$basepath = rtrim ( dirname ( $_SERVER ['PHP_SELF'] ), '/\\' );
?>
<!DOCTYPE html>
<html lang="de">
<head>
<title>Spirituelle Seelenreise - Angelika Bartels</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="de">
<meta name="audience" content="alle">
<meta name="description" content="Angelika Bartels, Spirituelle Rückführung">
<meta name="keywords"
	content="Angelika Bartels, Spirituelle Rückführung, Psychoenergetisches Atmen,
Leben zwischen den Leben">
<link href="<?=$basepath?>/stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body id="allcontent">
	<img src="<?=$basepath?>/img/screenshot.jpg" alt="Startseite" width="100%">
	<hr class="newpage">
	<div class='page'>
		<?php include ("subpages/lzl.php"); ?>
	</div>
	<hr class="newpage">
	<div class='page'>
		<?php include ("subpages/rueckfuehrung.php"); ?>
	</div>
	<hr class="newpage">
	<div class='page'>
		<?php include ("subpages/pea.php"); ?>
	</div>
	<hr class="newpage">
	<div class='page'>
		<?php include ("subpages/astrologie.php"); ?>
	</div>
	<hr class="newpage">
	<div class='page'>
		<?php include ("subpages/spiritcircle.php"); ?>
	</div>
	<hr class="newpage">
	<div class='page'>
		<?php include ("subpages/uebermich.php"); ?>
	</div>
	<hr class="newpage">
	<div class='page'>
		<?php include ("subpages/kontakt.php"); ?>
	</div>
	<hr class="newpage">
	<div class='page'>
		<?php include ("subpages/impressum.php"); ?>
	</div>
</body>

</html>
<script type="text/javascript">
	window.print();
</script>

