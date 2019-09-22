<?PHP
header ( 'Content-Type: text/html; charset=utf-8' );

// Determine menu style
if (empty ( $_GET ["style"] )) {
	$heading = "<h2>Imagen Aleatoria - Aplicación de Android</h2>";
}
else {
	$heading = "";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Random Image (Android App)</title>
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
		<a href="../?lang=es&page=howto" target="_parent">Notas de uso</a>
	</p>

	<p>
		<a href="../?lang=es&page=settings" target="_parent">Ajustes</a>
	</p>

	<p>
		<a href="../?lang=es&page=releasenotes" target="_parent">Notas de lanzamiento</a>
	</p>

	<p>
		<a href="../?lang=es&page=impressum" target="_parent">Aviso legal</a>
	</p>

</body>

</html>