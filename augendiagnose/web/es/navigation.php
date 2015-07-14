<?PHP
header ( 'Content-Type: text/html; charset=iso-8859-1' );

// Determine menu style
if (empty ( $_GET ["style"] )) {
	$heading = "<h2>Diagnóstico ocular - Aplicación para Android</h2>";
}
else {
	$heading = "";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Diagnóstico ocular (Aplicación para Android)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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

	<p>
		<a href="../?lang=es&page=organize_photos" target="_parent">Organizar nuevas fotos</a>
	</p>

	<p>
		<a href="../?lang=es&page=display_photos" target="_parent">Visualizar las fotos</a>
	</p>

	<p>
		<a href="../?lang=es&page=windowsapp" target="_parent">La aplicación para Windows</a>
	</p>

	<p>
		<a href="../?lang=es&page=downloads" target="_parent">Descargas</a>
	</p>

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick"> <input type="hidden" name="hosted_button_id" value="RUB5VFVSETVMN">
		<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_donate_LG.gif" border="0" name="submit"
			alt="PayPal, la forma más segura y rápida de pagar en línea."> <img alt="" border="0"
			src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
	</form>

</body>

</html>