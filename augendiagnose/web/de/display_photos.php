<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Fotos betrachten</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Betrachten der Fotos</h2>

	<p>Hier k�nnen Sie aus einer Liste den Namen der Person ausw�hlen, dessen Fotos Sie betrachten wollen. Daraufhin sehen
		Sie eine Liste aller Augenaufnahmen dieser Person, sortiert nach Datum.</p>

	<p>Anschlie�end haben Sie folgende M�glichkeiten:</p>

	<ul>
		<li>Detailansicht eines Fotos (durch Klick auf dieses Foto).</li>

		<li>Detailansicht beider Fotos von einem Datum (durch Klick auf das Datum)</li>

		<li>Detailansicht von zwei Fotos unterschiedlichen Datums (durch langen Klick auf ein Foto und anschlie�enden Klick
			auf ein anderes Foto)</li>

		<li>Detailansicht von zwei Fotos unterschiedlicher Personen - machen Sie erst einen langen Klick auf ein Foto, und
			w�hlen Sie dann ein Foto einer zweiten Person aus.</li>
	</ul>

	<p>Mit Hilfe dieser Funktionalit�t k�nnen Sie auch ein Augenfoto mit einer Iristopographie vergleichen. Hierzu m�ssen
		Sie nur die Grafiken von Iristopographien genauso organisieren wie Augenfotos. Die App liefert keine Iristopographien
		mit (au�er als Overlays).</p>

	<h3>Weitere Optionen in der �bersicht</h3>

	<ul>
		<li>In der Liste der Namen k�nnen Sie lange auf einen Namen klicken, und dann den Namen �ndern oder l�schen.</li>

		<li>In der Liste der Fotos zu einem Namen k�nnen Sie lange auf ein Datum klicken, und dann das Datum �ndern oder die
			Fotos dieses Datums l�schen, oder die Fotos dieses Datums 
			<?PHP if(isMiniris()) { ?>
			einem anderen Namen zuordnen.
			<?PHP } else { ?>
			ins Eingangsverzeichnis zur�ckschieben (z.B. um sie einem anderen Namen zuzuordnen).
			<?PHP } ?>
			</li>
	</ul>

	<h3>Weitere Optionen in der Detailansicht</h3>

	<p>In der Detailansicht (von einem oder zwei Fotos) bestehen noch folgende M�glichkeiten:</p>

	<ul>
		<li>Ver�ndern von Helligkeit und Kontrast mit Hilfe der Schieberegler <img src="../drawable/ic_seek_brightness.png" /><img
			src="../drawable/ic_seek_contrast.png" /></li>

		<li>Anzeige von Iristopographien als Overlay (nummerierte Buttons), Anpassen der Overlays an die Iris, Speichern der
			Position der Overlays (Lock-Button <img src="../drawable/ic_lock_open.png" />)
		</li>

		<li>Speichern der Einstellung von Helligkeit und Kontrast (�ber den &bdquo;Speichern&ldquo;-Button <img
			src="../drawable/ic_action_save.png" /> im Action-Men�)
		</li>

		<li>Speichern von Position und Zoom (�ber den &bdquo;Speichern&ldquo;-Button <img src="../drawable/ic_action_save.png" />
			im Action-Men�)
		</li>

		<li>�ndern der Beschreibung des Fotos (�ber den &bdquo;Dokument&ldquo;-Button <img src="../drawable/ic_comment.png" />
			im Action-Men�)
		</li>
	</ul>

	<p>
		Die zugeh�rigen Tools k�nnen �ber den Button &bdquo;Hilfsmittel anzeigen/verbergen&ldquo; <img
			src="../drawable/ic_tools_up.png" /> aktiviert oder deaktiviert werden.
	</p>
</body>
</html>