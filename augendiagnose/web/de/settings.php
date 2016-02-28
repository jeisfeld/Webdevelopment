<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Einstellungen</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Einstellungen</h2>

	Die Applikation ermöglicht folgende Einstellungen:
<?PHP
if (isAugendiagnose ()) {
	?>
	<h3>Eingangseinstellungen</h3>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">Eingangsverzeichnis für neue Augenfotos</td>
			<td width="70%" valign="top">
				<p>Dies ist das Verzeichnis, aus dem die App neue Augenfotos importiert. Als Standard ist hier entweder das
					Zielverzeichnis der Eye-Fi-App gesetzt oder das Standardverzeichnis der Kamera-App. Es kann aber ein beliebiges
					anderes Verzeichnis gewählt werden (z.B. das Kamera-Verzeichnis).</p>

				<p>Hintergrund zur Eye-Fi-App: Eine Smartphone-Kamera ist typischerweise nicht ausreichend, um hochwertige
					Augenfotografien zu machen. Daher wird eine externe Kamera benötigt. Der einfachste Weg, die Fotos von einer
					externen Kamera auf das Smartphone zu bekommen, ist die Nutzung einer Eye-Fi SD-Karte, die die Fotos per WiFi auf
					das Smartphone schickt.</p>
			</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Letztes Foto ist rechtes Auge</td>
			<td width="70%" valign="top">Hier kann eingestellt werden, ob das letzte Foto das rechte oder das linke Auge ist.
				Standardmäßig ist hier das linke Auge gewählt (unter der Annahme, dass Sie zuerst das rechte, und dann das linke
				Auge fotografiert haben).</td>
		</tr>
	</table>
<?PHP
}
?>

	<h3>Anzeigeeinstellungen</h3>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">Sortieren nach Nachname</td>
			<td width="70%" valign="top">Hier kann eingestellt werden, ob die Liste der Namen nach dem Nachnamen sortiert werden
				soll.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Angeleitete Einrichtung von Iris- und Pupillenposition</td>
			<td width="70%" valign="top">Hier können Sie wählen, ob Sie durch die Positionierung von Iris und Pupille geleitet
				werden, bevor Sie die Iristopographien anzeigen können.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Standardfarbe für Overlays</td>
			<td width="70%" valign="top">Hier können Sie die Farbe festlegen, in der Iristopographie-Overlays normalerweise
				angezeigt werden. (Voreinstellung: rot)</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Sprache</td>
			<td width="70%" valign="top">Hier können Sie die Anzeigesprache der Applikation ändern. Eine Änderung des Wertes
				erzwingt einen Neustart der App.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Alle Tipps zeigen</td>
			<td width="70%" valign="top">Hier können Sie alle Tipps reaktivieren.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Tipps nicht mehr zeigen</td>
			<td width="70%" valign="top">Hier können Sie alle vorhandenen Tipps deaktivieren (was nützlich ist, wenn Sie die App
				schon kennen, aber neu installieren).</td>
		</tr>
	</table>

	<h3>Speicher- und Leistungseinstellungen</h3>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">Verzeichnis der Augenfotos</td>
			<td width="70%" valign="top"><p>Dies ist das Verzeichnis, in dem die App die Augenfotos verwaltet. Dieses muss
					normalerweise nicht geändert werden. Von hier können Sie die Fotos auf andere Geräte kopieren.</p>

				<p>Das vorgegebene Verzeichnis ist &bdquo;Augenfotos&ldquo;.</p>

				<p>Sie können hier ein Verzeichnis wahlweise im Gerätespeicher oder auf der SD-Karte wählen. Unter Android 4.4
					(Kitkat) gibt es Einschränkungen beim schreiben auf SD-Karten, daher dauern manche Operationen etwas länger. In
					Android 5 müssen Sie bei der Auswahl eines Verzeichnisses der SD-Karte zunächst der App den Zugriff auf die
					SD-Karte gewähren (mittels des Storage Access Frameworks von Android).</p></td>
		</tr>
		<tr>
			<td width="30%" valign="top">Maximale Bitmap-Größe</td>
			<td width="70%" valign="top">Dies ist die Größe, auf die Fotos zur Anzeige herunterskaliert werden. Dies ist nötig,
				um Speicherplatz zu sparen. Als Standard ist hier 2048 eingestellt. Auf speicherarmen Geräten muss evtl. ein
				kleinerer Wert (z.B. 1024) konfiguriert werden. Zu große Werte können zu Abstürzen führen.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Anzeige in voller Auflösung</td>
			<td width="70%" valign="top">Hier können Sie festlegen, unter welchen Umständen das Foto in voller Auflösung
				angezeigt wird. Dies erlaubt es, mehr Details auf dem Foto zu sehen, aber es verbraucht Speicher und Rechenzeit.

				<ul>
					<li><b>Immer automatisch laden:</b> Das Foto wird immer in voller Auflösung im Speicher gehalten. Dies führt dazu,
						dass man auf High-End-Geräten immer alle Details sehen kann. Es könnte aber zu Abstürzen führen, falls nicht genug
						Speicher zur Verfügung steht.</li>

					<li><b>Automatisch laden, wenn nur ein Foto angezeigt wird:</b> Das Foto wird nur bei Anzeige eines einzigen Fotos
						in voller Auflösung angezeigt. Dies benötigt nur halb so viel Speicher.</li>

					<li><b>Nur auf Anfrage:</b> Die App lädt die Fotos nicht in voller Auflösung. Dies verbraucht am wenigsten Speicher
						und Rechenzeit, aber Details in den Fotos könnten nicht sichtbar sein. Mit Hilfe des &bdquo;Lupen&ldquo;-Buttons <img
						src="../drawable/ic_clarity.png" /> kann der aktuelle Ausschnitt in voller Bildauflösung angezeigt werden.</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Speichern von Daten in JPG-Dateien</td>
			<td width="70%" valign="top">Hier können Sie einschränken, inwieweit die App Daten in den JPG-Dateien speichert.

				<ul>
					<li><b>Speichern in EXIF (empfohlen):</b> Die Applikation speichert verfügbare Informationen in der JPG-Datei, auch
						in Standardfeldern, die z.B. in Windows sichtbar sind.</li>

					<li><b>Speichern in Extra-Feldern:</b> Die Applikation speichert Informationen in der JPG-Datei, aber nur in neuen
						Feldern. Standardfelder bleiben unverändert; der Datenaustausch mit Windows ist nicht möglich.</li>

					<li><b>Nicht in Fotos speichern:</b> Die Applikation speichert keine Informationen in Fotos. (Dann stehen nur Teile
						der Funktionalität der App zur Verfügng.)</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Automatische Iris-Erkennung</td>
			<td width="70%" valign="top">Hier können Sie wählen, ob die App automatisch versuchen soll, die Position von Iris und
				Pupille in den Augenfotos zu bestimmen. Dies wird typischerweise die Positionierung der Overlays vereinfachen, aber
				es erfordert viele Systemressourcen, und das Ergebnis kann inkorrekt sein.</td>
		</tr>
	</table>

	<h3>Kameraeinstellungen</h3>

	<table width="100%" border="1">
<?PHP
if (isMiniris ()) {
	?>
		<tr>
			<td width="30%" valign="top">Mit linkem Auge starten</td>
			<td width="70%" valign="top">Hier kann eingestellt werden, welches Auge zuerst fotografiert werden soll.
				Standardmäßig ist hier das rechte Auge gewählt.</td>
		</tr>
<?PHP
}
?>
		<tr>
			<td width="30%" valign="top">Kamera-Kompatibilität</td>
			<td width="70%" valign="top">Falls Ihr Smartphone Android 5 oder höher nutzt, dann kann hier eingestellt werden, ob
				die neuen Kamera-Funktionen von Android 5 genutzt werden sollen. Die Wahl &bdquo;Android 4&ldquo; ist sinnvoll im
				Fall von Problemen mit den Kamerafunktionen von Android 5.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Blitzlicht erlauben</td>
			<td width="70%" valign="top">Hier können Sie die Verwendung des Blitzlichtes erlauben. In der Voreinstellung ist dies
				nicht erlaubt, da das Blitzlicht direkt vor dem Auge gefährlich ist.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Kamera-Bildschirmposition</td>
			<td width="70%" valign="top">Wenn das Miniris-Band Knöpfe auf dem Kamera-Bildschirm verbirgt, dann können Sie diese
				Einstellung verwenden, um den Kamera-Bildschirm nach rechts oder links zu verschieben.</td>
		</tr>
	</table>

	<h3>Overlay-Buttons</h3>

	<p>Diese Seite ermöglicht es Ihnen festzulegen, welche Iristopographie-Overlays den jeweiligen Buttons zugeordnet sind.
		Die gleiche Konfiguration können Sie auch beim Betrachten der Fotos machen, indem Sie lange auf einen der Buttons
		drücken.</p>

	<h3>Premium-Pakete / Hilfe</h3>

	<p>Diese Seite ermöglicht den Erwerb eines Premium-Paketes, über das die unbegrenzte Nutzung aller Funktionen der App
		freigeschaltet wird..</p>

	<p>Darüber hinaus gibt es folgende Optionen:</p>

	<table width="100%" border="1">
<?PHP
if (isAugendiagnose ()) {
	?>
		<tr>
			<td width="30%" valign="top">Werbung entfernen (nur für Nutzer älterer Versionen)</td>
			<td width="70%" valign="top">Hier können Sie die Werbung entfernen (vorerst nur in den USA). Diese Möglichkeit kann
				per Spende oder Nutzerschlüssel freigeschaltet werden.</td>
		</tr>
<?PHP
}
?>
		<tr>
			<td width="30%" valign="top">Kontakt mit dem Entwickler</td>
			<td width="70%" valign="top">Hier können Sie eine E-Mail an den Entwickler schreiben, falls Sie Wünsche oder Probleme
				haben.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Nutzerschlüssel</td>
			<td width="70%" valign="top">Ein Nutzerkennwort, das die Freigabe zusätzlicher Funktionalitäten ermöglicht.</td>
		</tr>
	</table>

</body>
</html>