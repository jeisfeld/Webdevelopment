<h2>
	<span class="mobile">Zufallsbild - </span>Hinweise zur Benutzung
</h2>

<p>Diese App zeigt zufällige Bilder von Bildlisten, die Sie konfigurieren. Daher müssen Sie zunächst eine Bildliste
	erstellen, bevor Sie die Anzeige zufälliger Bilder genießen können.</p>

<h3>Erstellung der Bildliste</h3>

<h4>Erste Schritte</h4>

<p>Wenn Sie die App zum ersten Mal öffnen, wird zunächst Ihr Telefon nach Bildverzeichnissen durchsucht (einschließlich
	SD-Karte), und es wird eine erste Bildliste erstellt, die alle diese Verzeichnisse enthält. Diese Liste können Sie dann
	verwenden, um zufällige Bilder Ihres Telefons anzuschauen. Anschließend können Sie die Bildliste ändern, wenn Sie nur
	bestimmte Fotoverzeichnisse auf Ihrem Telefon berücksichtigen wollen.</p>

<h4>Öffnen der Konfigurationsseite</h4>

<p>Um Ihre Bildliste zu konfigurieren, müssen Sie generell die Konfigurationsseite für die Bildliste öffnen. Dies können
	Sie auf folgende Arten tun:</p>

<ul>
	<li>Durch langes Drücken auf ein Bild, während Sie es sehen, und anschließendes Drücken von &bdquo;Bildliste
		anzeigen&ldquo;.</li>
	<li>Von der <a href="#mainConfiguration">Hauptkonfigurationsseite</a>, in der all Ihre Bildlisten angezeigt werden.
	</li>
	<li>Von der Konfigurationsseite eines Widgets oder einer Benachrichtigung, die diese Liste verwendet.</li>
</ul>

<h4>Hinzufügen von Bildern auf die Bildliste</h4>

<p>Wenn Sie Bilder zu Ihrer Liste hinzufügen wollen, gibt es die folgenden Möglichkeiten:</p>

<ul>
	<li>Drücken Sie auf der Bildlisten-Konfigurationsseite auf das Symbol <img
		src="<?=$basepath?>/drawable/ic_action_plus.png" />. Dann sehen Sie eine Liste
		<ul>
			<li>Ihrer anderen Bildlisten (blau)</li>
			<li>Der Bildverzeichnisse auf Ihrem Gerät (gelb)</li>
			<li>Der übergeordneten Verzeichnisse (orange).</li>
		</ul> Nun können Sie
		<ul>
			<li>ein Bildverzeichnis (gelb) auswählen. Dann werden die Bilder aus diesem Verzeichnis angezeigt. Sie können dann
				entweder Bilder aus diesem Verzeichnis auswählen und anschließend hinzufügen, oder Sie können über das Symbol <img
				src="<?=$basepath?>/drawable/ic_action_add_folder.png" /> das ganze Verzeichnis hinzufügen. Sie können hier auch
				einen Filter eingeben, damit nur diejenigen Verzeichnisse angezeigt werden, die in ihrem Pfad eine gewisse
				Zeichenkette enthalten.
			</li>
			<li>eine vorhandene Bildliste (blau) auswählen, um sie Ihrer Liste als Unterliste hinzuzufügen.</li>
			<li>eine übergeordnetes Verzeichnis (orange) auswählen, es einschließlich aller Unterverzeicnisse Ihrer Liste
				hinzuzufügen.</li>
			<li>das Symbol <img src="<?=$basepath?>/drawable/ic_action_checkbox.png" /> drücken und anschließend mehrere
				Verzeichnisse zum Hinzufügen auswählen.
			</li>
			<li>das Symbol <img src="<?=$basepath?>/drawable/ic_action_folder.png" /> drücken und anschließend in Ihrem
				Dateisystem nach Verzeichnissen und Fotos suchen, die Sie hinzufügen wollen.
			</li>
		</ul>
	</li>
	<li>Alternativ können Sie ein Foto in der Galerie-App anzeigen es von dort an die Zufallsbild-App senden, oder Sie
		können mehrere Fotos in der Galerie-App auswählen und sie an die Zufallsbild-App senden.</li>
</ul>

<p>
	Über das Symbol <img src="<?=$basepath?>/drawable/ic_action_minus.png" /> können Sie Bilder und Verzeichnisse aus Ihrer
	Bildliste entfernen.
</p>

<p>Andere Bildlisten, die in der aktuellen Liste enthalten sind, werden als blaues Verzeichnis dargestellt. Wenn Sie
	lange auf eine solche Liste drücken, können Sie anpassen, wie häufig Bilder dieser enthaltenen Liste angezeigt werden.
	Hierdurch haben Sie die Möglichkeit, die Anzeigehäufigkeit von Bildern aus kleinen Listen zu erhöhen. Das gleiche
	können Sie auch für Verzeichnisse tun.</p>

<h3>
	<a name="viewImages"></a>
	Bilder ansehen
</h3>

<h4>Anschauen zufälliger Bilder über das Startseitensymbol</h4>

<ul>
	<li>Wenn Sie das Startseiten-Symbol drücken, wird die App ein zufälliges Bild aus Ihrer Zufallsbildliste im Vollbild
		anzeigen. Wenn Sie mehrere Bilderlisten konfiguriert haben, werden Sie zunächst aufgefordert, die Bilderliste
		auszuwählen, aus der Sie Bilder anzeigen möchten</li>
	<li>Wenn Sie mehr Details sehen wollen, können Sie es wie üblich mit zwei Fingern vergrößern.</li>
	<li>Wenn Sie ein anderes Bild aus der Liste sehen wollen, dann schnipsen Sie das Bild einfach weg.</li>
	<li>Sie können ein Bild zurückgehen, indem Sie in die andere Richtung schnipsen.</li>
	<li>Wenn Sie wissen wollen, wo die Bilddatei liegt, drücken Sie etwas länger auf das Bild. Von hier aus haben Sie auch
		noch andere Möglichkeiten:
		<ul>
			<li>Anzeige des Bildes in der Galerie</li>
			<li>Senden des Bildes (z.B. über E-Mail)</li>
			<li>Anzeige des Foto-Standorts auf der Karte</li>
			<li>Verwenden des Bildes als Widget-Bild</li>
			<li>Entfernen des Bildes aus der Bildliste</li>
		</ul>
	</li>
</ul>

<h4>Verwenden von Widgets</h4>

Es gibt drei Arten von Widgets, die Sie auf Ihrem Home-Bildschirm platzieren können, um zufällige Bilder zu sehen.

<ul>
	<li><b>Mini-Widget:</b> Dieses Widget verhält sich wie der Startseitensymbol, solange Sie nur eine Bildliste haben.
		Wenn Sie mehrere Bildlisten konfiguriert haben, dann ruft man mit dem Mini-Widget ein zufälliges Bild einer bestimmten
		Bildliste auf.</li>
	<li><b>Zufallsbilderrahmen:</b> Dieses Widget legt eines der Bilder Ihrer Bildliste auf dem Startbildschirm und
		wechselt es in regelmäßigen Zeitabständen. Sie haben verschiedene Konfigurationsmöglichkeiten.</li>
	<li><b>Zufallsbilderstapel:</b> Dieses Widget legt die Bilder Ihrer Liste in zufälliger Reihenfolge als Kartenstapel
		oder als scrollbare Liste auf dem Home-Bildschirm. Sie können sich von einem Bild zum nächsten bewegen.</li>
</ul>

<p>Wenn Sie auf den Zufallsbilderrahmen oder den Zufallsbilderstapel tippen, dann können Sie das angezeigte Foto im
	Detail anschauen. Von hier aus können das Bild wegschnippen, um weitere Bilder der gleichen Liste zu sehen.</p>

<p>
	Der Zufallsbilderrahmen ermöglicht es auch, zu einem neuen zufälligen Bild zu wechseln (durch Tippen auf das Symbol <img
		src="<?=$basepath?>/drawable/ic_widget_next.png" /> am rechten Rand des Rahmens) oder die Konfiguration des Widgets zu
	ändern (durch Tippen auf das Symbol <img src="<?=$basepath?>/drawable/ic_widget_settings.png" /> am linken Rand des
	Widgets).
</p>

<p>Wenn Sie mehrere Bildlisten haben, dann können Sie auch Widgets für mehrere Bildlisten auf Ihren Startbildschirm
	legen, so dass Sie zum Beispiel immer ein Foto von Ihrem Partner und ein Foto von Ihrem letzten Urlaub auf dem
	Bildschirm haben können.</p>
<p>Bitte beachten Sie, dass direkt nach einem Neustart des Telefons oder Tablets die externe SD-Karte noch nicht
	verfügbar ist. Daher können nach einem Neustart nur Bilder aus dem internen Telefonspeicher in den Widgets angezeigt
	werden. Wenn Sie auch direkt nach Neustarts ein schönes Bild sehen wollen, sollten Sie einen nettes Foto aus dem
	internen Telefonspeicher in jede Ihrer Bildlisten aufnehmen.</p>

<h4>Verwenden von Benachrichtigungen</h4>

<p>
	Alternativ zu Widgets können Sie auch Benachrichtigungen nutzen, um Bilder aus Ihren Bildlisten in zufälligen
	Zeitabständen angezeigt zu bekommen. Die Konfiguration der Benachrichtigungen erfolgt über die
	Hauptkonfigurationsseite. Mehr Details hierzu gibt es im Abschnitt
	<a href="settings.html#notificationSettings">Benachrichtigungs-Einstellungen</a>
	.
</p>

<h3>
	<a name="mainConfiguration"></a>
	Hauptkonfiguration
</h3>

<p>Die Hauptkonfigurationsseite kann auf folgende Arten geöffnet werden:</p>

<ul>
	<li>Durch das Hinzufügen des Symbols für die Zufallsbild-Konfiguration auf Ihre Startseite. (Dies ist ein zweites
		Startsymbol der App, neben dem Standard-Symbol, welches ein Zufallsbild aufruft.)</li>
	<li>Wenn Sie auf der Konfigurationsseite einer Bildliste sind, durch drücken enteder auf die linke obere Ecke des
		Bildschirms oder auf das Symbol <img src="<?=$basepath?>/drawable/ic_action_home.png" />.

</ul>

<p>Hier haben Sie folgende Möglichkeiten:</p>

<ul>
	<li>Zur Konfiguration einzelner Bildlisten wechseln (durch Drücken eines Bildlistensymbols)</li>
	<li>Eine neue Bildliste hinzufügen (durch Drücken von <img src="<?=$basepath?>/drawable/ic_action_plus.png" />)
	</li>
	<li>Mehrere Bildlisten zum Sichern, Wiederherstellen oder Löschen auswählen (durch Drücken von <img
		src="<?=$basepath?>/drawable/ic_action_checkbox.png" />)
	</li>
	<li>Die allgemeinen App-Einstellungen ändern (durch Drücken von <img
		src="<?=$basepath?>/drawable/ic_action_settings.png" />)
	</li>
	<li>Die Widget-Einstellungen ändern</li>
	<li>Die Benachrichtigungs-Einstellungen ändern (und Benachrichtigungen hinzufügen oder löschen)</li>
	<li>Eine einzelne Bildliste sichern, wiederherstellen, umbenennen, löschen oder klonen, oder einen Shortcut erstellen
		(durch langen Druck auf ein Bildlistensymbol)</li>
</ul>
