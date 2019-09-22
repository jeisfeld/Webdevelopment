<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?PHP
include "pageheader.php";

// Determine menu style
if (empty ( $_GET ["style"] )) {
	$heading = "<h2>${appname} - Android App</h2>";
}
else {
	$heading = "";
}

?>
<html>
<head>
<title><?=$appname?> (Aplicativo para Android)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>

<body>
	<?=$heading?>

	<p>
		<a href="../?lang=pt&page=overview" target="_parent">Informações gerais</a>
	</p>

	<p>
		<a href="../?lang=pt&page=settings" target="_parent">Ajustes</a>
	</p>

<?PHP
if (isAugendiagnose ()) {
	?>
	<p>
		<a href="../?lang=pt&page=organize_photos" target="_parent">Organize novas fotos</a>
	</p>
<?PHP
}
?>

	<p>
		<a href="../?lang=pt&page=display_photos" target="_parent">Visualizar fotos</a>
	</p>

	<p>
		<a href="../?lang=pt&page=windowsapp" target="_parent">O aplicativo para o Windows</a>
	</p>

	<p>
		<a href="../?lang=pt&page=downloads" target="_parent">Downloads</a>
	</p>

	<p>
		<a href="../?lang=pt&page=impressum" target="_parent">Aviso Legal</a>
	</p>

</body>

</html>