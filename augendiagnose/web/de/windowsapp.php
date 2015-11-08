<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Die Windows-Anwendung</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Die Windows-Anwendung</h2>

	<p>Es gibt eine ergänzende Windows-Anwendung, die es erlaubt, die Augenfotos auch auf einem Windows-Desktop anzusehen,
		ähnlich wie in der Android-App.</p>

	<p>Die Windows-Anwendung dient nur als Ergänzung zur Android-App. Sie hat weniger Funktionen als die Android-App.
		Insbesondere erlaubt sie nicht, neue Fotos einzuordnen und die Position der Overlays auf den Fotos festzulegen. Man
		kann mit ihr aber die Overlays anzeigen und den Kommentar bearbeiten.</p>

	<p>
		Um die Windows-Anwendung zu nutzen, müssen Sie das Verzeichnis der Augenfotos Ihres Android-Gerätes mit einem
		entsprechenden Verzeichnis auf Ihrem Windows-Desktop synchronisieren. Dieses Verzeichnis können Sie in den
		Einstellungen festlegen.<br> Eine Möglichkeit, diese Synchronisation vorzunehmen, ist die Verwendung einer WebDAV-App
		unter Android und einer Synchronisations-Anwendung auf Windows (z.B. FreeFileSync). Dann können Sie die
		Synchronisations-Anwendung so konfigurieren, dass sie über WebDAV drahtlos auf den Speicher des Android-Gerätes
		zugreift.
	</p>

	<h3>Menü-Einträge</h3>
	<ul>
		<li><b>Datei&rarr;Beenden:</b> Beenden der Anwendung.</li>

		<li><b>Ansicht&rarr;Overlay-Leiste:</b> Ein- und Ausblenden der Leiste zur Anzeige von Overlays oder zum Ändern von
			Helligkeit/Kontrast.</li>

		<li><b>Ansicht&rarr;Kommentarleiste:</b> Ein- und Ausblenden der Leiste zum Bearbeiten des Bildkommentars.</li>

		<li><b>Ansicht&rarr;Geteiltes Fenster:</b> Teilung des Fensters, so dass zwei Fotos gleichzeitig angeschaut werden
			können.</li>

		<li><b>Fenster&rarr;Schließen:</b> Hier können Sie die Detailansicht eines Auges schließen. (Alternativ können Sie auf
			das Kreuz rechts oben klicken.)</li>

		<li><b>Fenster&rarr;Einstellungen:</b> Ändern der Einstellungen.</li>

		<li><b>Hilfe&rarr;Auf Aktualisierung prüfen:</b> Hier können Sie überprüfen, ob es eine Aktualisierung der Anwendung
			gibt. Wenn es eine neue Aktualisierung gibt, werden Sie auch einmal beim Start der Anwendung informiert.</li>

		<li><b>Hilfe&rarr;Anwendung deinstallieren:</b> Hier können Sie die Anwendung deinstallieren.</li>
	</ul>

	<h3>Einstellungen</h3>

	<ul>
		<li><b>Verzeichnis der Augenfotos:</b> Hier müssen Sie das Verzeichnis auswählen, in dem Sie Ihre Augenfotos
			speichern. Dieses Verzeichnis muss die gleiche Struktur haben wie in der Android-App.</li>

		<li><b>Maximals Bitmap-Größe:</b> Dies ist die Größe, auf die Fotos zur Anzeige herunterskaliert werden.</li>

		<li><b>Größe der Vorschaubilder:</b> Dies ist die Größe, in der Vorschaubilder angezeigt werden.</li>

		<li><b>Standardfarbe für Overlays:</b> Hier können Sie die Farbe festlegen, in der Iristopographie-Overlays
			normalerweise angezeigt werden.</li>

		<li><b>Sortieren nach Nachname:</b> Hier kann eingestellt werden, ob die Liste der Namen nach dem Nachnamen sortiert
			werden soll.</li>

		<li><b>Automatisch aktualisieren:</b> Hier können Sie festlegen, dass neue Versionen der Anwendung automatisch
			heruntergeladen und installiert werden, sobald die Anwendung gestartet wird.</li>

		<li><b>Sprache:</b> Hier können Sie die Anzeigesprache der Anwendung ändern. Eine Änderung des Wertes erzwingt einen
			Neustart der Anwendung.</li>

	</ul>

	<h3>Versionshinweise</h3>

	<ul>
		<li><b>Version 0.1.4:</b> Anpassung der Overlays an die Pupillengröße. Darstellung rotierter Fotos.</li>

		<li><b>Version 0.1.3:</b> Gleichzeitige Anzeige zweier Augenfotos. Schnelle Anzeige in voller Fenstgergröße.</li>

		<li><b>Version 0.1.2:</b> Warnung, wenn das Fenster geschlossen wird, während der Kommentar bearbeitet wird.</li>

		<li><b>Version 0.1.1:</b> Auswahl der Sprache ist möglich.</li>

		<li><b>Version 0.1:</b> Erste Version. Anschauen der organisierten Augenfotos, Anzeige von Overlays, Ändern von
			Helligkeit und Kontrast, Bearbeiten des Bildkommentars.</li>
	</ul>

	<h3>
		<a href="../?lang=de&page=downloads" target="_parent">Zur Download-Seite</a>
	</h3>

</body>
</html>