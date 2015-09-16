<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - �bersicht</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2><?=$appname?> - �bersicht</h2>

<?PHP
if (isAugendiagnose ()) {
	?>
	
	Diese App dient dazu, Fotografien von Augen im Detail anzuschauen und zu vergleichen, im Rahmen der medizinischen
	Augendiagnose.

	<h3>Funktionalit�ten</h3>

	<ul>
		<li>Organisation von Augenfotos nach Name, Datum und K�rperseite (rechts/links)</li>

		<li>Gleichzeigige Anzeige zweier Fotos (mit voller Zoom-Funktionalit�t), so dass man zwei Fotos vergleichen kann (z.B.
			Vergleich rechts-links, Vergleich fr�her-sp�ter, Vergleich zweier Personen, oder Vergleich eines Fotos mit einer
			Iristopographie).</li>

		<li>�nderung von Helligkeit und Kontrast eines Augenfotos bei der Anzeige, und Anzeige des Fotos mit einer
			eingeblendeten Iristopographie (als Overlay)</li>

		<li>Sie k�nnen auch Informationen in den Fotos speichern, z.B. Helligkeitsanpassungen und Kommentare. Um Informationen
			speichern zu k�nnen und die volle Funktionalit�t der App nutzen zu k�nnen, brauchen Sie Fotos im JPG-Format.</li>
	</ul>

	Diese Applikation ist noch im Beta-Stadium - weitere Funktionalit�ten sind geplant. W�nsche f�r weitere Funktionen
	k�nnen Sie mir gerne mitteilen.

	<h3>Aktivit�ten</h3>

	<h4>Schritt 1: Organisation der Fotos</h4>

	<p>In diesem Schritt k�nnen Sie Ihre Augenfotos organisieren.</p>

	<p>Die App erwartet neue Augenfotos in einem Eingangsverzeichnis. Dieses ist Vorkunfiguriert als das Zielverzeichnis
		der Eye-Fi App oder als das Standardverzeichnis der Kamera, es kann aber �ber die Einstellungen ge�ndert werden.</p>

	<p>In der Aktivit�t &bdquo;Neue Fotos einordnen&ldquo; k�nnen Sie neue Augenfotos aus dem Eingangsverzeichnis einer
		Person und einem Datum zuordnen und so f�r die App vorbereiten. Dabei werden die Fotos Umbenannt und in das
		Augenfoto-Verzeichnis verschoben.</p>

	<p>Als Alternative zur Nutzung des Eingangsverzeichnisses k�nnen Sie auch zwei Fotos in einem Dateibrowser oder einer
		Foto-App ausw�hlen und an die Augendiagnose-App senden. Dann k�nnen Sie diese Fotos in der App einordnen. In diesem
		Fall werden die Fotos nicht aus ihrem alten Verzeichnis gel�scht.</p>

	<p>Als weitere Alternative k�nnen Sie auch Fotos direkt aus der App heraus mit der Ger�te-Kamera aufnehmen. Dies wird
		normalerweise nicht zu Fotos in ausreichender Qualit�t f�hren, ist aber eine Ersatzl�sung zu einer professionellen
		Kamera.</p>

	<h4>Schritt 2: Betrachten der Fotos</h4>

	<p>Dies ist der Hauptzweck der App, aber er setzt die vorherige Organisation �ber Schritt 1 voraus.</p>

	<p>In dieser Aktivit�t k�nnen Sie</p>

	<ul>
		<li>Ein Foto im Detail Anschauen. Dabei k�nnen Sie auch Helligkeit und Kontrast �ndern, Iristopographien als Overlay
			anzeigen oder einen Kommentar zu einem Foto schreiben.</li>

		<li>Zwei Fotos vergleichen (und dabei unabh�ngig voneinander zoomen).</li>
	</ul>

	<h3>Testzeitraum / In-App-K�ufe</h3>

	<p>Die App erlaubt freie Nutzung nur f�r einen Testzeitraum von zwei Wochen. F�r die weitere Nutzung ist der einmalige
		Erwerb eines Paketes innerhalb der App erforderlich.</p>

	<h3>Windows-Anwendung</h3>

	<p>
		Es gibt auch eine Windows-Anwendung, die Sie nutzen k�nnen, um die Fotos, die Sie mit dieser App organisiert haben,
		auf Ihrem Windows-Computer anzuschauen. F�r mehr Informationen siehe
		<a href="http://augendiagnose.jeisfeld.de/?lang=de&page=windowsapp" target="_top">http://augendiagnose.jeisfeld.de/?page=windowsapp</a>
		.
	</p>

	<h3>Datenspeicherung</h3>

	<p>Die App speichert Informationen (wie Irisposition oder Kommentare) direkt in den JPG-Bilddateien. Dies hat den
		Vorteil, dass alle Informationen auch dann noch verf�gbar sind, wenn Sie die Fotos auf ein anderes Ger�t kopieren. Zum
		Teil sind die Informationen (wie Kommentare) sogar unter Windows verf�gbar.</p>

	<p>Diese Form der Speicherung birgt leider auch Risiken. Es k�nnte sein, dass f�r spezielle Smartphones/Tablets oder
		f�r spezielle Kameras die Speicherung der Informationen in den JPG-Dateien nicht funktioniert, und vielleicht sogar
		die Dateien zerst�rt. Daher empfehle ich, von Ihren Fotos eine Sicherheitskopie vorzuhalten, wenn Sie die App zum
		ersten Mal mit einem neuen Smartphone/Tablet oder einer neuen Kamera benutzen.</p>
		
<?PHP
}
else {
	?>

	<p>Diese App dient dazu, Fotografien von Augen anzufertigen, sie im Detail anzuschauen und zu vergleichen, im Rahmen
		der medizinischen Irisdiagnose. Sie ist f�r die Nutzung mit dem Miniris-Werkzeug optimiert.</p>

	<h3>Funktionalit�ten</h3>

	<p>Die App unterst�tzt folgende Funktionalit�ten:</p>

	<ul>
		<li>Aufnahme der Iris mit der Telefonkamera (z.B. mit Unterst�tzung des Miniris-Tools).</li>
		<li>Die Organisation von Iris-Fotografien nach Name, Datum und K�rperseite (rechts/links).</li>
		<li>Die gleichzeigige Anzeige zweier Fotos (mit voller Zoom-Funktionalit�t), so dass man zwei Fotos vergleichen kann.</li>
		<li>�nderung von Helligkeit und Kontrast eines Augenfotos bei der Anzeige, und Anzeige des Fotos mit einer
			eingeblendeten Iristopographie (als Overlay), sowie Speichern von Kommentaren zu den Fotos.</li>
	</ul>

	<p>Die App speichert Daten (wie die Position der Pupille auf dem Foto) als Metadata in der JPG-Datei. Dies erm�glicht
		es, solche Informationen einfach auf andere Ger�te zu �bertragen - durch Kopieren der Fotos.</p>

	<h3>Benutzung der Kamera</h3>

	<p>Nach dem �ffnen der Kamera sehen Sie die folgenden Bereiche:</p>

	<ul>
		<li>Auf der rechten Seite befindet sich in der Mitte der Knopf zum Aufnehmen der Fotos. Nach Aufnahme eines Fotos
			k�nnen Sie entscheiden, ob Sie das Foto behalten wollen, oder ob Sie es verwerfen und neu aufnehmen wollen.</li>
		<li>In den oberen Ecken befindet sich die Anzeige des rechten und linken Augenfotos. Die rote Markierung zeigt an,
			welches Auge als n�chstes aufgenommen wird. Wenn Sie auf eine dieser Fl�chen dr�cken, k�nnen Sie die Seite wechseln.</li>
		<li>Auf der Kameraanzeige befindet sich ein gro�er Kreis. Dieser Kreis zeigt an, wo Sie die Iris aufnehmen sollten.</li>
		<li>Links unten befindet sich ein Blitz-Knopf. Hier k�nnen Sie einstellen, ob Sie das Blitzlicht des Ger�tes benutzen
			wollen.</li>
		<li>Dar�ber befindet sich ein Knopf mit einem Kreis. Hier k�nnen Sie ausw�hlen, wie gro� die Iris auf dem Foto sein
			sollte.</li>
	</ul>

	<p>Nachdem Sie beide Augen aufgenommen haben, erscheint eine Seite, wo Sie beide Fotos noch einmal anschauen k�nnen und
		wo Sie einen Namen eingeben k�nnen, dem die beiden Fotos zugeordnet werden. Hier k�nnen Sie auch das Datum �ndern,
		unter dem die Fotos gespeichert werden - f�r jede Person und jedes Datum kann nur ein Augenfoto-Paar gespeichert
		werden.</p>

	<p>Falls Sie die App stoppen, nachdem Sie ein oder zwei Fotos aufgenommen haben, aber bevor Sie einen Namen zugeordnet
		haben, dann wird die App beim n�chsten Start an der gleichen Stelle weitermachen - die schon aufgenommenen Fotos
		werden gespeichert, bis Sie entscheiden, sie zu l�schen oder zu �berschreiben.</p>

	<h3>Windows-Anwendung</h3>

	<p>
		Es gibt auch eine Windows-Anwendung, die Sie nutzen k�nnen, um die Fotos, die Sie mit dieser App organisiert haben,
		auf Ihrem Windows-Computer anzuschauen. F�r mehr Informationen siehe
		<a href="http://miniris.jeisfeld.de/?lang=de&page=windowsapp" target="_top">http://miniris.jeisfeld.de/?page=windowsapp</a>
		.
	</p>

<?PHP
}
?>

</body>
</html>
