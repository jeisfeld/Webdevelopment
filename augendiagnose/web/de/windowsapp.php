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

	<p>Es gibt eine erg�nzende Windows-Anwendung, die es erlaubt, die Augenfotos auch auf einem Windows-Desktop anzusehen,
		�hnlich wie in der Android-App.</p>

	<p>Die Windows-Anwendung dient nur als Erg�nzung zur Android-App. Sie hat weniger Funktionen als die Android-App.
		Insbesondere erlaubt sie nicht, neue Fotos einzuordnen und die Position der Overlays auf den Fotos festzulegen. Man
		kann mit ihr aber die Overlays anzeigen und den Kommentar bearbeiten.</p>

	<p>
		Um die Windows-Anwendung zu nutzen, m�ssen Sie das Verzeichnis der Augenfotos Ihres Android-Ger�tes mit einem
		entsprechenden Verzeichnis auf Ihrem Windows-Desktop synchronisieren. Dieses Verzeichnis k�nnen Sie in den
		Einstellungen festlegen.<br> Eine M�glichkeit, diese Synchronisation vorzunehmen, ist die Verwendung einer WebDAV-App
		unter Android und einer Synchronisations-Anwendung auf Windows (z.B. FreeFileSync). Dann k�nnen Sie die
		Synchronisations-Anwendung so konfigurieren, dass sie �ber WebDAV drahtlos auf den Speicher des Android-Ger�tes
		zugreift.
	</p>

	<h3>Men�-Eintr�ge</h3>
	<ul>
		<li><b>Datei&rarr;Beenden:</b> Beenden der Anwendung.</li>

		<li><b>Ansicht&rarr;Overlay-Leiste:</b> Ein- und Ausblenden der Leiste zur Anzeige von Overlays oder zum �ndern von
			Helligkeit/Kontrast.</li>

		<li><b>Ansicht&rarr;Kommentarleiste:</b> Ein- und Ausblenden der Leiste zum Bearbeiten des Bildkommentars.</li>

		<li><b>Ansicht&rarr;Geteiltes Fenster:</b> Teilung des Fensters, so dass zwei Fotos gleichzeitig angeschaut werden
			k�nnen.</li>

		<li><b>Fenster&rarr;Schlie�en:</b> Hier k�nnen Sie die Detailansicht eines Auges schlie�en. (Alternativ k�nnen Sie auf
			das Kreuz rechts oben klicken.)</li>

		<li><b>Fenster&rarr;Einstellungen:</b> �ndern der Einstellungen.</li>

		<li><b>Hilfe&rarr;Auf Aktualisierung pr�fen:</b> Hier k�nnen Sie �berpr�fen, ob es eine Aktualisierung der Anwendung
			gibt. Wenn es eine neue Aktualisierung gibt, werden Sie auch einmal beim Start der Anwendung informiert.</li>

		<li><b>Hilfe&rarr;Anwendung deinstallieren:</b> Hier k�nnen Sie die Anwendung deinstallieren.</li>
	</ul>

	<h3>Einstellungen</h3>

	<ul>
		<li><b>Verzeichnis der Augenfotos:</b> Hier m�ssen Sie das Verzeichnis ausw�hlen, in dem Sie Ihre Augenfotos
			speichern. Dieses Verzeichnis muss die gleiche Struktur haben wie in der Android-App.</li>

		<li><b>Maximals Bitmap-Gr��e:</b> Dies ist die Gr��e, auf die Fotos zur Anzeige herunterskaliert werden.</li>

		<li><b>Gr��e der Vorschaubilder:</b> Dies ist die Gr��e, in der Vorschaubilder angezeigt werden.</li>

		<li><b>Standardfarbe f�r Overlays:</b> Hier k�nnen Sie die Farbe festlegen, in der Iristopographie-Overlays
			normalerweise angezeigt werden.</li>

		<li><b>Sortieren nach Nachname:</b> Hier kann eingestellt werden, ob die Liste der Namen nach dem Nachnamen sortiert
			werden soll.</li>

		<li><b>Automatisch aktualisieren:</b> Hier k�nnen Sie festlegen, dass neue Versionen der Anwendung automatisch
			heruntergeladen und installiert werden, sobald die Anwendung gestartet wird.</li>

		<li><b>Sprache:</b> Hier k�nnen Sie die Anzeigesprache der Anwendung �ndern. Eine �nderung des Wertes erzwingt einen
			Neustart der Anwendung.</li>

	</ul>

	<h3>Versionshinweise</h3>

	<ul>
		<li><b>Version 0.1.3:</b> Gleichzeitige Anzeige zweier Augenfotos. Schnelle Anzeige in voller Fenstgergr��e.</li>

		<li><b>Version 0.1.2:</b> Warnung, wenn das Fenster geschlossen wird, w�hrend der Kommentar bearbeitet wird.</li>

		<li><b>Version 0.1.1:</b> Auswahl der Sprache ist m�glich.</li>

		<li><b>Version 0.1:</b> Erste Version. Anschauen der organisierten Augenfotos, Anzeige von Overlays, �ndern von
			Helligkeit und Kontrast, Bearbeiten des Bildkommentars.</li>
	</ul>

	<h3>
		<a href="../?lang=de&page=downloads" target="_parent">Zur Download-Seite</a>
	</h3>

</body>
</html>