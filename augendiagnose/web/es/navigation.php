<?PHP
header ( 'Content-Type: text/html; charset=iso-8859-1' );

// Determine menu style
if (empty ( $_GET ["style"] )) {
	$heading = "<h2>Diagn�stico ocular - Aplicaci�n para Android</h2>";
}
else {
	$heading = "";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Diagn�stico ocular (Aplicaci�n para Android)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>

<body>
	<?=$heading?>

	<p>
		<a href="../?lang=es&page=overview" target="_parent">Informaci�n general</a>
	</p>

	<p>
		<a href="../?lang=es&page=settings" target="_parent">Ajustes</a>
	</p>

	<p>
		<a href="../?lang=es&page=organize_photos" target="_parent">Organizar nuevas fotos</a>
	</p>

	<p>
		<a href="../?lang=es&page=display_photos" target="_parent">Visualizar las fotos</a>
	</p>

	<p>
		<a href="../?lang=es&page=windowsapp" target="_parent">La aplicaci�n para Windows</a>
	</p>

	<p>
		<a href="../?lang=es&page=downloads" target="_parent">Descargas</a>
	</p>
</body>

</html>