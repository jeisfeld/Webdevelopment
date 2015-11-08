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
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> (Aplicación para Android)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>

<body>
	<?=$heading?>

	<p>
		<a href="../?lang=es&page=overview" target="_parent">Información general</a>
	</p>

	<p>
		<a href="../?lang=es&page=settings" target="_parent">Ajustes</a>
	</p>

<?PHP
if (isAugendiagnose ()) {
	?>
	<p>
		<a href="../?lang=es&page=organize_photos" target="_parent">Organizar nuevas fotos</a>
	</p>
<?PHP
}
?>

	<p>
		<a href="../?lang=es&page=display_photos" target="_parent">Visualizar las fotos</a>
	</p>

	<p>
		<a href="../?lang=es&page=windowsapp" target="_parent">La aplicación para Windows</a>
	</p>

	<p>
		<a href="../?lang=es&page=downloads" target="_parent">Descargas</a>
	</p>

</body>

</html>