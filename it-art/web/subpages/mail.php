<?php

// ======= Konfiguration:
$mailTo = 'webdevelopment@it-art.de';
$mailFrom = '"Form Mailer" <unknown@unknown.de>';
$mailSubject = 'Formular-Mail von ';
$returnPage = 'mail-success.html';
$returnErrorPage = 'mail-failure.html';
$mailText = "";
$allFields = "";

// ======= Text der Mail aus den Formularfeldern erstellen:

// Wenn Daten mit method="post" versendet wurden:
if (isset ( $_POST )) {
	// alle Formularfelder der Reihe nach durchgehen:
	foreach ( $_POST as $name => $value ) {
		// Wenn der Feldwert aus mehreren Werten besteht: Konkateniere diese
		if (is_array ( $value )) {
			$value = implode ( "\n", $value );
			$_POST [$name] = $value;
		}

		$allFields .= $name . ": " . $value . "\n";
	}

	$absender = $_POST ['absender'];
	$absendername = $_POST ['absendername'];
	$nachricht = $_POST ['nachricht'];

	if ($absendername != "") {
		$mailFrom = '"' . $absendername . '" <' . $absender . '>';
	} else {
		$mailFrom = $absender;
	}

	$mailText = $nachricht . "\n\n----------------------------------------------------------------------------\n\n" . $allFields;
	$mailSubject = 'Mail von it-art.de';
} // if

// ======= Korrekturen vor dem Mailversand

// Wenn PHP "Magic Quotes" vor Apostrophzeichen einfügt:
if (get_magic_quotes_gpc ()) {
	// eventuell eingefügte Backslashes entfernen
	$mailtext = stripslashes ( $mailtext );
}

// ======= Mailversand

// Mail versenden und Versanderfolg merken
$mailSent = @mail ( $mailTo, $mailSubject, $mailText, "From: " . $mailFrom );

// ======= Return-Seite an den Browser senden

// Wenn der Mailversand erfolgreich war:
if ($mailSent == TRUE) {
	// Seite "Formular verarbeitet" senden:
	header ( "Location: " . $returnPage );
}  // Wenn die Mail nicht versendet werden konnte:
else {
	// Seite "Fehler aufgetreten" senden:
	header ( "Location: " . $returnErrorPage );
}

// ======= Ende

exit ();

?>