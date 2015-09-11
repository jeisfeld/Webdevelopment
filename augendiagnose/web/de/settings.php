<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Einstellungen</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Einstellungen</h2>

	Die Applikation erm�glicht folgende Einstellungen:

	<h3>Eingangsverzeichnis f�r neue Augenfotos</h3>

	<p>Dies ist das Verzeichnis, aus dem die App neue Augenfotos importiert. Als Standard ist hier entweder das
		Zielverzeichnis der Eye-Fi-App gesetzt oder das Standardverzeichnis der Kamera-App. Es kann aber ein beliebiges
		anderes Verzeichnis gew�hlt werden (z.B. das Kamera-Verzeichnis).</p>

	<p>Hintergrund zur Eye-Fi-App: Eine Smartphone-Kamera ist typischerweise nicht ausreichend, um hochwertige
		Augenfotografien zu machen. Daher wird eine externe Kamera ben�tigt. Der einfachste Weg, die Fotos von einer externen
		Kamera auf das Smartphone zu bekommen, ist die Nutzung einer Eye-Fi SD-Karte, die die Fotos per WiFi auf das
		Smartphone schickt.</p>

	<h3>Anzeigeeinstellungen</h3>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">Letztes Foto ist rechtes Auge</td>
			<td width="70%" valign="top">Hier kann eingestellt werden, ob das letzte Foto das rechte oder das linke Auge ist.
				Standardm��ig ist hier das linke Auge gew�hlt (unter der Annahme, dass Sie zuerst das rechte, und dann das linke
				Auge fotografiert haben).</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Sortieren nach Nachname</td>
			<td width="70%" valign="top">Hier kann eingestellt werden, ob die Liste der Namen nach dem Nachnamen sortiert werden
				soll.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Standardfarbe f�r Overlays</td>
			<td width="70%" valign="top">Hier k�nnen Sie die Farbe festlegen, in der Iristopographie-Overlays normalerweise
				angezeigt werden. (Voreinstellung: rot)</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Sprache</td>
			<td width="70%" valign="top">Hier k�nnen Sie die Anzeigesprache der Applikation �ndern. Eine �nderung des Wertes
				erzwingt einen Neustart der App.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Tipps</td>
			<td width="70%" valign="top">Hier k�nnen Sie alle Tipps reaktivieren, oder Sie k�nnen alle vorhandenen Tipps
				deaktivieren (was n�tzlich ist, wenn Sie die App schon kennen, aber neu installieren).</td>
		</tr>
	</table>

	<h3>Speichereinstellungen</h3>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">Verzeichnis der Augenfotos</td>
			<td width="70%" valign="top"><p>Dies ist das Verzeichnis, in dem die App die Augenfotos verwaltet. Dieses muss
					normalerweise nicht ge�ndert werden. Von hier k�nnen Sie die Fotos auf andere Ger�te kopieren.</p>

				<p>Das vorgegebene Verzeichnis ist &bdquo;Augenfotos&ldquo;.</p>

				<p>Sie k�nnen hier ein Verzeichnis wahlweise im Ger�tespeicher oder auf der SD-Karte w�hlen. Unter Android 4.4
					(Kitkat) gibt es Einschr�nkungen beim schreiben auf SD-Karten, daher dauern manche Operationen etwas l�nger. In
					Android 5 m�ssen Sie bei der Auswahl eines Verzeichnisses der SD-Karte zun�chst der App den Zugriff auf die
					SD-Karte gew�hren (mittels des Storage Access Frameworks von Android).</p></td>
		</tr>
		<tr>
			<td width="30%" valign="top">Maximale Bitmap-Gr��e</td>
			<td width="70%" valign="top">Dies ist die Gr��e, auf die Fotos zur Anzeige herunterskaliert werden. Dies ist n�tig,
				um Speicherplatz zu sparen. Als Standard ist hier 2048 eingestellt. Auf speicherarmen Ger�ten muss evtl. ein
				kleinerer Wert (z.B. 1024) konfiguriert werden. Zu gro�e Werte k�nnen zu Abst�rzen f�hren.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Anzeige in voller Aufl�sung</td>
			<td width="70%" valign="top">Hier k�nnen Sie festlegen, unter welchen Umst�nden das Foto in voller Aufl�sung
				angezeigt wird. Dies erlaubt es, mehr Details auf dem Foto zu sehen, aber es verbraucht Speicher und Rechenzeit.

				<ul>
					<li><b>Immer automatisch laden:</b> Das Foto wird immer in voller Aufl�sung im Speicher gehalten. Dies f�hrt dazu,
						dass man auf High-End-Ger�ten immer alle Details sehen kann. Es k�nnte aber zu Abst�rzen f�hren, falls nicht genug
						Speicher zur Verf�gung steht.</li>

					<li><b>Automatisch laden, wenn nur ein Foto angezeigt wird:</b> Das Foto wird nur bei Anzeige eines einzigen Fotos
						in voller Aufl�sung angezeigt. Dies ben�tigt nur halb so viel Speicher.</li>

					<li><b>Nur auf Anfrage:</b> Die App l�dt die Fotos nicht in voller Aufl�sung. Dies verbraucht am wenigsten Speicher
						und Rechenzeit, aber Details in den Fotos k�nnten nicht sichtbar sein. Mit Hilfe des &bdquo;Lupen&ldquo;-Buttons <img
						src="../drawable/ic_clarity.png" /> kann der aktuelle Ausschnitt in voller Bildaufl�sung angezeigt werden.</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Speichern von Daten in JPG-Dateien</td>
			<td width="70%" valign="top">Hier k�nnen Sie einschr�nken, inwieweit die App Daten in den JPG-Dateien speichert.

				<ul>
					<li><b>Speichern in EXIF (empfohlen):</b> Die Applikation speichert verf�gbare Informationen in der JPG-Datei, auch
						in Standardfeldern, die z.B. in Windows sichtbar sind.</li>

					<li><b>Speichern in Extra-Feldern:</b> Die Applikation speichert Informationen in der JPG-Datei, aber nur in neuen
						Feldern. Standardfelder bleiben unver�ndert; der Datenaustausch mit Windows ist nicht m�glich.</li>

					<li><b>Nicht in Fotos speichern:</b> Die Applikation speichert keine Informationen in Fotos. (Dann stehen nur Teile
						der Funktionalit�t der App zur Verf�gng.)</li>
				</ul>
			</td>
		</tr>
	</table>

	<h3>Werbung entfernen / Spenden</h3>

	<p>Diese Seite bietet einige Optionen, um eine Spende an den Entwickler zu machen - die Entwicklung dieser App kostet
		viel Zeit; daher w�re es sch�n, von den Anwendern der App etwas zur�ckzubekommen.</p>

	<p>Dar�berhinaus gibt es folgende Optionen:</p>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">Werbung entfernen</td>
			<td width="70%" valign="top">Hier k�nnen Sie die Werbung entfernen (vorerst nur in den USA). Diese M�glichkeit kann
				per Spende oder Nutzerschl�ssel freigeschaltet werden.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Kontakt mit dem Entwickler</td>
			<td width="70%" valign="top">Hier k�nnen Sie eine E-Mail an den Entwickler schreiben, falls Sie W�nsche oder Probleme
				haben.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Nutzerschl�ssel</td>
			<td width="70%" valign="top">Ein Nutzerkennwort, das die Freigabe zus�tzlicher Funktionalit�ten erm�glicht.</td>
		</tr>
	</table>

</body>
</html>