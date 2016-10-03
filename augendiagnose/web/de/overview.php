<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Übersicht</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2><?=$appname?> - Übersicht</h2>

<?PHP
if (isAugendiagnose ()) {
	?>
	
	Diese App dient dazu, Fotografien von Augen im Detail anzuschauen und zu vergleichen, im Rahmen der medizinischen
	Augendiagnose.

	<h3>Funktionalitäten</h3>

	<ul>
		<li>Organisation von Augenfotos nach Name, Datum und Körperseite (rechts/links)</li>

		<li>Gleichzeigige Anzeige zweier Fotos (mit voller Zoom-Funktionalität), so dass man zwei Fotos vergleichen kann (z.B.
			Vergleich rechts-links, Vergleich früher-später, Vergleich zweier Personen, oder Vergleich eines Fotos mit einer
			Iristopographie).</li>

		<li>Änderung von Helligkeit und Kontrast eines Augenfotos bei der Anzeige, und Anzeige des Fotos mit einer
			eingeblendeten Iristopographie (als Overlay)</li>

		<li>Sie können auch Informationen in den Fotos speichern, z.B. Helligkeitsanpassungen und Kommentare. Um Informationen
			speichern zu können und die volle Funktionalität der App nutzen zu können, brauchen Sie Fotos im JPG-Format.</li>
	</ul>

	<h3>Aktivitäten</h3>

	<h4>Schritt 1: Organisation der Fotos</h4>

	<p>In diesem Schritt können Sie Ihre Augenfotos organisieren.</p>

	<p>Die App erwartet neue Augenfotos in einem Eingangsverzeichnis. Dieses ist Vorkunfiguriert als das Zielverzeichnis
		der Eye-Fi App oder als das Standardverzeichnis der Kamera, es kann aber über die Einstellungen geändert werden.</p>

	<p>In der Aktivität &bdquo;Neue Fotos einordnen&ldquo; können Sie neue Augenfotos aus dem Eingangsverzeichnis einer
		Person und einem Datum zuordnen und so für die App vorbereiten. Dabei werden die Fotos Umbenannt und in das
		Augenfoto-Verzeichnis verschoben.</p>

	<p>Als Alternative zur Nutzung des Eingangsverzeichnisses können Sie auch zwei Fotos in einem Dateibrowser oder einer
		Foto-App auswählen und an die Augendiagnose-App senden. Dann können Sie diese Fotos in der App einordnen. In diesem
		Fall werden die Fotos nicht aus ihrem alten Verzeichnis gelöscht.</p>

	<p>
		Als weitere Alternative können Sie auch Fotos direkt aus der App heraus mit der Geräte-Kamera aufnehmen. Dies wird
		normalerweise nicht zu Fotos in ausreichender Qualität führen, ist aber eine Ersatzlösung zu einer professionellen
		Kamera, insbesondere dann, wenn Sie eine Makro-Linse wie das
		<a href="https://sites.google.com/site/irisocamera/iriso-english" target="_blank">Miniris-2</a>
		einsetzen.
	</p>

	<h4>Schritt 2: Betrachten der Fotos</h4>

	<p>Dies ist der Hauptzweck der App, aber er setzt die vorherige Organisation über Schritt 1 voraus.</p>

	<p>In dieser Aktivität können Sie</p>

	<ul>
		<li>Ein Foto im Detail Anschauen. Dabei können Sie auch Helligkeit und Kontrast ändern, Iristopographien als Overlay
			anzeigen oder einen Kommentar zu einem Foto schreiben.</li>

		<li>Zwei Fotos vergleichen (und dabei unabhängig voneinander zoomen).</li>
	</ul>

	<h3>Testzeitraum / In-App-Käufe</h3>

	<p>Die App erlaubt freie Nutzung nur für einen Testzeitraum von zwei Wochen. Für die weitere Nutzung ist der einmalige
		Erwerb eines Paketes innerhalb der App erforderlich.</p>

	<h3>Windows-Anwendung</h3>

	<p>
		Es gibt auch eine Windows-Anwendung, die Sie nutzen können, um die Fotos, die Sie mit dieser App organisiert haben,
		auf Ihrem Windows-Computer anzuschauen. Für mehr Informationen siehe
		<a href="http://augendiagnose.jeisfeld.de/?lang=de&page=windowsapp" target="_top">http://augendiagnose.jeisfeld.de/?page=windowsapp</a>
		.
	</p>

	<h3>Datenspeicherung</h3>

	<p>Die App speichert Informationen (wie Irisposition oder Kommentare) direkt in den JPG-Bilddateien. Dies hat den
		Vorteil, dass alle Informationen auch dann noch verfügbar sind, wenn Sie die Fotos auf ein anderes Gerät kopieren. Zum
		Teil sind die Informationen (wie Kommentare) sogar unter Windows verfügbar.</p>

	<p>Diese Form der Speicherung birgt leider auch Risiken. Es könnte sein, dass für spezielle Smartphones/Tablets oder
		für spezielle Kameras die Speicherung der Informationen in den JPG-Dateien nicht funktioniert, und vielleicht sogar
		die Dateien zerstört. Daher empfehle ich, von Ihren Fotos eine Sicherheitskopie vorzuhalten, wenn Sie die App zum
		ersten Mal mit einem neuen Smartphone/Tablet oder einer neuen Kamera benutzen.</p>
		
<?PHP
}
else {
	?>

	<p>
		Diese App dient dazu, Fotografien von Augen anzufertigen, sie im Detail anzuschauen und zu vergleichen, im Rahmen der
		medizinischen Irisdiagnose. Sie ist für die Nutzung mit dem
		<a href="https://sites.google.com/site/irisocamera/iriso-english" target="_blank">Miniris-2-Zubehör</a>
		optimiert.
	</p>

	<h3>Funktionalitäten</h3>

	<p>Die App unterstützt folgende Funktionalitäten:</p>

	<ul>
		<li>Aufnahme der Iris mit der Telefonkamera (z.B. mit Unterstützung des Miniris-2-Zubehörs).</li>
		<li>Die Organisation von Iris-Fotografien nach Name, Datum und Körperseite (rechts/links).</li>
		<li>Die gleichzeigige Anzeige zweier Fotos (mit voller Zoom-Funktionalität), so dass man zwei Fotos vergleichen kann.</li>
		<li>Änderung von Helligkeit und Kontrast eines Augenfotos bei der Anzeige, und Anzeige des Fotos mit einer
			eingeblendeten Iristopographie (als Overlay), sowie Speichern von Kommentaren zu den Fotos.</li>
	</ul>

	<p>Die App speichert Daten (wie die Position der Pupille auf dem Foto) als Metadata in der JPG-Datei. Dies ermöglicht
		es, solche Informationen einfach auf andere Geräte zu übertragen - durch Kopieren der Fotos.</p>

	<h3>Benutzung der Kamera</h3>

	<p>Nach dem Öffnen der Kamera sehen Sie die folgenden Bereiche:</p>

	<ul>
		<li>Auf der rechten Seite befindet sich in der Mitte der Knopf zum Aufnehmen der Fotos. Nach Aufnahme eines Fotos
			können Sie entscheiden, ob Sie das Foto behalten wollen, oder ob Sie es verwerfen und neu aufnehmen wollen.</li>
		<li>In den oberen Ecken befindet sich die Anzeige des rechten und linken Augenfotos. Die rote Markierung zeigt an,
			welches Auge als nächstes aufgenommen wird. Wenn Sie auf eine dieser Flächen drücken, können Sie die Seite wechseln.</li>
		<li>Auf der Kameraanzeige befindet sich ein großer Kreis. Dieser Kreis zeigt an, wo Sie die Iris aufnehmen sollten.</li>
		<li>Links unten befindet sich ein Knopf mit einem Kreis und der Aufschrift &bdquo;Zoom&ldquo;. Hier können Sie den
			Kamera-Zoom einstellen und auswählen, wie groß die Iris auf dem Foto sein sollte.</li>
		<li>Darüber befindet sich ein Knopf mit dem Text &bdquo;MACRO&ldquo; oder &bdquo;AUTO&ldquo;. Hier können Sie den
			Fokus-Modus der Kamera einstellen. Für Nahaufnahmen ist der MACRO-Modus normalerweise eine gute Wahl.</li>
		<li>Darüber befindet sich ein Blitz-Knopf. Hier können Sie das Licht Ihres Smartphones einschalten. Hier können Sie
			auch den Kamera-Blitz einschalten. Da dieser für das Auge gefährlich ist, muss der Kamera-Blitz aber zunächst über
			die Einstellungen freigeschaltet werden.</li>
	</ul>

	<p>Nachdem Sie beide Augen aufgenommen haben, erscheint eine Seite, wo Sie beide Fotos noch einmal anschauen können und
		wo Sie einen Namen eingeben können, dem die beiden Fotos zugeordnet werden. Hier können Sie auch das Datum ändern,
		unter dem die Fotos gespeichert werden - für jede Person und jedes Datum kann nur ein Augenfoto-Paar gespeichert
		werden.</p>

	<p>Falls Sie die App stoppen, nachdem Sie ein oder zwei Fotos aufgenommen haben, aber bevor Sie einen Namen zugeordnet
		haben, dann wird die App beim nächsten Start an der gleichen Stelle weitermachen - die schon aufgenommenen Fotos
		werden gespeichert, bis Sie entscheiden, sie zu löschen oder zu überschreiben.</p>

	<h3>Testzeitraum / In-App-Käufe</h3>

	<p>Die App erlaubt freie Nutzung nur für einen Testzeitraum von zwei Wochen. Für die weitere Nutzung ist der einmalige
		Erwerb eines Paketes innerhalb der App erforderlich.</p>

	<h3>Windows-Anwendung</h3>

	<p>
		Es gibt auch eine Windows-Anwendung, die Sie nutzen können, um die Fotos, die Sie mit dieser App organisiert haben,
		auf Ihrem Windows-Computer anzuschauen. Für mehr Informationen siehe
		<a href="http://miniris.jeisfeld.de/?lang=de&page=windowsapp" target="_top">http://miniris.jeisfeld.de/?page=windowsapp</a>
		.
	</p>

<?PHP
}
?>

</body>
</html>
