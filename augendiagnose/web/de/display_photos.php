<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Fotos betrachten</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Betrachten der Fotos</h2>

	<p>Hier können Sie aus einer Liste den Namen der Person auswählen, dessen Fotos Sie betrachten wollen. Daraufhin sehen
		Sie eine Liste aller Augenaufnahmen dieser Person, sortiert nach Datum.</p>

	<p>Anschließend haben Sie folgende Möglichkeiten:</p>

	<ul>
		<li>Detailansicht eines Fotos (durch Klick auf dieses Foto).</li>

		<li>Detailansicht beider Fotos von einem Datum (durch Klick auf das Datum)</li>

		<li>Detailansicht von zwei Fotos unterschiedlichen Datums (durch langen Klick auf ein Foto und anschließenden Klick
			auf ein anderes Foto)</li>

		<li>Detailansicht von zwei Fotos unterschiedlicher Personen - machen Sie erst einen langen Klick auf ein Foto, und
			wählen Sie dann ein Foto einer zweiten Person aus.</li>
	</ul>

	<p>Mit Hilfe dieser Funktionalität können Sie auch ein Augenfoto mit einer Iristopographie vergleichen. Hierzu müssen
		Sie nur die Grafiken von Iristopographien genauso organisieren wie Augenfotos. Die App liefert keine Iristopographien
		mit (außer als Overlays).</p>

	<h3>Weitere Optionen in der Übersicht</h3>

	<ul>
		<li>In der Liste der Namen können Sie lange auf einen Namen klicken, und dann den Namen ändern oder löschen.</li>

		<li>In der Liste der Fotos zu einem Namen können Sie lange auf ein Datum klicken, und dann das Datum ändern oder die
			Fotos dieses Datums löschen, oder die Fotos dieses Datums 
			<?PHP if(isMiniris()) { ?>
			einem anderen Namen zuordnen.
			<?PHP } else { ?>
			ins Eingangsverzeichnis zurückschieben (z.B. um sie einem anderen Namen zuzuordnen).
			<?PHP } ?>
			</li>
	</ul>

	<h3>Weitere Optionen in der Detailansicht</h3>

	<p>In der Detailansicht (von einem oder zwei Fotos) bestehen noch folgende Möglichkeiten:</p>

	<ul>
		<li>Verändern von Helligkeit und Kontrast mit Hilfe der Schieberegler <img src="../drawable/ic_seek_brightness.png" /><img
			src="../drawable/ic_seek_contrast.png" /></li>

		<li>Anzeige von Iristopographien als Overlay (Kreis-Button <img src="../drawable/ic_btn_wheel.png" class="frameless" />
			und nummerierte Buttons), Anpassen der Overlays an die Iris, Speichern der Position der Overlays (Lock-Button <img
			src="../drawable/ic_lock_open.png" />)
		</li>

		<li>Anpassen der Pupillengröße für die Overlays (Button <img src="../drawable/ic_btn_pupil_0.png" class="frameless" />).
			Hier können Sie die Pupille entweder zentriert lassen (<img src="../drawable/ic_btn_pupil_1.png" class="frameless" />)
			oder frei bewegen (<img src="../drawable/ic_btn_pupil_2.png" class="frameless" />).
		</li>

		<li>Speichern der Einstellung von Helligkeit und Kontrast (über den &bdquo;Speichern&ldquo;-Button <img
			src="../drawable/ic_action_save.png" /> im Action-Menü)
		</li>

		<li>Speichern von Position und Zoom (über den &bdquo;Speichern&ldquo;-Button <img src="../drawable/ic_action_save.png" />
			im Action-Menü)
		</li>

		<li>Ändern der Beschreibung des Fotos (über den &bdquo;Dokument&ldquo;-Button <img src="../drawable/ic_comment.png" />
			im Action-Menü)
		</li>
	</ul>

	<p>
		Die zugehörigen Tools können über den Button &bdquo;Hilfsmittel anzeigen/verbergen&ldquo; (<img
			src="../drawable/ic_tools_up.png" /> <img src="../drawable/ic_tools_down.png" /> <img
			src="../drawable/ic_tools_left.png" /> <img src="../drawable/ic_tools_right.png" />) aktiviert oder deaktiviert
		werden.
	</p>
</body>
</html>