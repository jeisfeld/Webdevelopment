<?PHP
include "pageheader.php";

if (isAugendiagnose ()) {
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Organizar nuevas fotos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Organizar nuevas fotos</h2>

	<p>Aqu� usted puede organizar sus fotos de los ojos.</p>

	<p>Se muestran los dos �ltimos im�genes de la carpeta de entrada.</p>

	<p>Con el bot�n &laquo;Cambiar&raquo; usted puede intercambiar las dos fotos.</p>

	<p>Con el bot�n &laquo;Otras Fotos&raquo; puede seleccionar dos diferentes fotos de la carpeta de entrada, haciendo
		clic en dos de las fotos mostradas. Aqu�, usted tambi�n puede eliminar las fotos de la carpeta de entrada, mediante el
		uso de la men� contextual (pulsaci�n larga en una foto).</p>

	<p>En &laquo;Seleccionar Nombre&raquo; se puede seleccionar el nombre de la persona de la cual se toman las fotos de
		los ojos. Aqu� si puede seleccionar un nombre existente o introducir un nuevo nombre.</p>

	<p>En &laquo;Seleccionar Fecha&raquo; puede seleccionar la fecha en que las fotos ser�n listadas. Normalmente se trata
		de la fecha de captura de las fotos, que es preseleccionada. Sin embargo, usted puede seleccionar una fecha diferente.
		Esto es necesario particularmente, si desea mantener m�s de un par de ojos de una persona de un fecha - la aplicaci�n
		permite s�lo un par de fotos por d�a y persona</p>

	<p>Con el bot�n &laquo;Aceptar&raquo; puede mover el par de fotos de ojos seleccionado a la carpeta de fotos ojo. Las
		fotos est�n asociadas con el nombre y fecha determinada y luego pueden ser utilizadas por la aplicaci�n.</p>
</body>
</html>
<?PHP
}
?>