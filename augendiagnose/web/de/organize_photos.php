<?PHP
include "pageheader.php";

if (isAugendiagnose ()) {
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Fotos organisieren</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Organisation der Fotos</h2>

	<p>Hier k�nnen Sie Ihre Augenfotos organisieren.</p>

	<p>Es werden die beiden letzten Fotos aus dem Eingangsverzeichnis angezeigt.</p>

	<p>Mit dem Button &bdquo;Tauschen&ldquo; k�nnen Sie die beiden Fotos tauschen.</p>

	<p>Mit dem Button &bdquo;Andere Fotos&ldquo; k�nnen Sie zwei andere Fotos aus dem Eingangsverzeichnis ausw�hlen, indem
		sie zwei der angezeigten Fotos anklicken. Hier k�nnen Sie auch Fotos im Eingangsverzeichnis l�schen, indem Sie durch
		einen langen Klick auf ein Foto das Kontextmen� �ffnen.</p>

	<p>Unter &bdquo;Name w�hlen&ldquo; k�nnen Sie den Namen der Person festlegen, zu der die Augen geh�ren. Hier k�nnen Sie
		entweder einen vorhandenen Namen ausw�hlen oder einen neuen Namen eingeben.</p>

	<p>Unter &bdquo;Datum w�hlen&ldquo; k�nnen Sie das Datum w�hlen, dem die Fotos zugeordnet sind. Hier ist das
		Aufnahmedatum vorausgew�hlt. Sie k�nnen aber auch ein anderes Datum w�hlen. Dies ist insbesondere dann n�tig, wenn es
		schon Fotos dieses Nutzers von diesem Datum gibt - die App erlaubt nur ein Augenpaar einer Person zu einem Datum.</p>

	<p>Mit dem Button &bdquo;Anwenden&ldquo; k�nnen Sie das gew�hlte Paar Augenfotos in das Augenfoto-Verzeichnis
		verschieben. Die Fotos werden zur angegebenen Person und dem angegebenen Datum zugeordnet und stehen dem Programm
		anschlie�end zur Verf�gung.</p>
</body>
</html>
<?PHP
}
?>