<?PHP
header ( 'Content-Type: text/html; charset=iso-8859-1' );

// Determine page
if (empty ( $_GET ["page"] )) {
	$page = "overview";
}
else {
	$page = $_GET ["page"];
}

// Determine mobile style
if (empty ( $_GET ["style"] )) {
	$isMobile = false;
	$class = "desktop";
}
else {
	$isMobile = true;
	$class = "mobile";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Diagnóstico ocular (Aplicación para Android)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body class="<?=$class?>">
	<p>
		<a href="../?lang=en&page=<?=$page?>" target="_parent">English</a>
		<a href="../?lang=de&page=<?=$page?>" target="_parent">Deutsch</a>
		Español
	</p>

<?php
if ($isMobile) {
	?>
	<div id="homebutton">
		<a href="../?lang=es&page=toc" target="_parent"><img alt="Home" src="../drawable/ic_home.png"></a>
	</div>
<?php
}
else {
	?>
	<h1>Diagnóstico ocular - Aplicación para Android</h1>
<?php
}
?>
</body>
</html>