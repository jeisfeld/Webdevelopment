<?PHP
include "pageheader.php";

if (isAugendiagnose ()) {
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Fotos organisieren</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Organisation der Fotos</h2>

	<p>Hier können Sie Ihre Augenfotos organisieren.</p>

	<p>Es werden die beiden letzten Fotos aus dem Eingangsverzeichnis angezeigt.</p>

	<p>Mit dem Button &bdquo;Tauschen&ldquo; können Sie die beiden Fotos tauschen.</p>

	<p>Mit dem Button &bdquo;Andere Fotos&ldquo; können Sie ein oder zwei andere Fotos aus dem Eingangsverzeichnis
		auswählen, indem sie zwei der angezeigten Fotos anklicken. Hier können Sie auch Fotos im Eingangsverzeichnis löschen,
		indem Sie durch einen langen Klick auf ein Foto das Kontextmenü öffnen.</p>

	<p>Unter &bdquo;Name wählen&ldquo; können Sie den Namen der Person festlegen, zu der die Augen gehören. Hier können Sie
		entweder einen vorhandenen Namen auswählen oder einen neuen Namen eingeben.</p>

	<p>Unter &bdquo;Datum wählen&ldquo; können Sie das Datum wählen, dem die Fotos zugeordnet sind. Hier ist das
		Aufnahmedatum vorausgewählt. Sie können aber auch ein anderes Datum wählen. Dies ist insbesondere dann nötig, wenn es
		schon Fotos dieses Nutzers von diesem Datum gibt - die App erlaubt nur ein Augenpaar einer Person zu einem Datum.</p>

	<p>Mit dem Button &bdquo;Anwenden&ldquo; können Sie das gewählte Paar Augenfotos in das Augenfoto-Verzeichnis
		verschieben. Die Fotos werden zur angegebenen Person und dem angegebenen Datum zugeordnet und stehen dem Programm
		anschließend zur Verfügung.</p>

	<p>Durch das Antippen des Fotopaares können Sie die beiden Fotos im Detail ansehen. (Siehe auch: &bdquo;Betrachten der
		Fotos&ldquo;)</p>
</body>
</html>
<?PHP
}
?>
