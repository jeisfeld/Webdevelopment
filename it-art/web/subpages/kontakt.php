<!DOCTYPE html>
<html lang="de">
<head>
<title>Kontakt</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
<script type="text/javascript" src="../javascript/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../javascript/subpage.js"></script>
</head>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $contentErr = "";
$name = $email = $content = "";

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	if (empty ( $_POST ["name"] )) {
		$nameErr = "Bitte geben Sie Ihren Namen an!";
	} else {
		$name = test_input ( $_POST ["name"] );

		if (empty ( $name )) {
			$nameErr = "Bitte geben Sie Ihren Namen an!";
		}
	}

	if (empty ( $_POST ["email"] )) {
		$emailErr = "Bitte geben Sie Ihre Email-Adresse an!";
	} else {
		$email = test_input ( $_POST ["email"] );
		// check if e-mail address is well-formed
		if (! filter_var ( $email, FILTER_VALIDATE_EMAIL )) {
			$emailErr = "Bitte geben Sie eine gültige Email-Adresse an!";
		}
	}

	if (empty ( $_POST ["content"] )) {
		$contentErr = "Bitte geben Sie eine Nachricht ein!";
	} else {
		$content = test_input ( $_POST ["content"] );

		if (empty ( $content )) {
			$contentErr = "Bitte geben Sie eine Nachricht ein!";
		}
	}
}
function test_input($data) {
	$data = trim ( $data );
	$data = stripslashes ( $data );
	$data = htmlspecialchars ( $data, ENT_COMPAT | ENT_HTML401, 'ISO-8859-1' );
	return $data;
}
?>

<body id="kontakt" class="mainpage" onload="document.kontaktformular.name.focus();">
	<h1>Kontakt</h1>

	<p>
		Bitte kontaktieren Sie mich per E-Mail:<br>
		<a href="mailto:webdevelopment@it-art.de">webdevelopment@it-art.de</a>
	</p>
	<form id="kontaktformular" name="kontaktformular" method="post"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php
if (empty ( $name ) || ! empty ( $nameErr ) || ! empty ( $emailErr ) || ! empty ( $contentErr )) {
	?>

			<div>
			<label for="name">Ihr Name:<span class="error"> <?php echo $nameErr;?></span></label> <input type="text" name="name"
				class="inputtext" value="<?php echo $name;?>" />
		</div>

		<div>
			<label for="email">Ihre E-Mail-Adresse:<span class="error"> <?php echo $emailErr;?></span></label> <input type="text"
				name="email" class="inputtext" value="<?php echo $email;?>" />
		</div>

		<div>
			<label for="content">Ihre Nachricht:<span class="error"> <?php echo $contentErr;?></span></label>
			<textarea id="nachricht" name="content" cols="20" rows="5"><?php echo $content;?></textarea>
		</div>

		<div>
			<input type="submit" value="Abschicken" />
		</div>

<?php
} else {

	$mailTo = '"IT-art" <webdevelopment@it-art.de>';
	$mailFrom = '"' . $name . '" <' . $email . '>';
	$mailSubject = 'Mail von IT-art.de';
	$mailText = $content;

	$mailSent = @mail ( $mailTo, $mailSubject, $mailText, "From: " . $mailFrom );

	// Confirmation message
	if ($mailSent) {
		echo "<h3>Danke für Ihre Nachricht!</h3>";
		echo "<p>Sie erhalten eine automatische Bestätigungsmail an die von Ihnen angegebene E-Mail-Adresse. Ich werde dann bei nächster Gelegenheit auf Ihre Nachricht antworten.</p>";

		// Confirmation mail
		$mailTo = '"' . $name . '" <' . $email . '>';
		$mailFrom = '"IT-art" <webdevelopment@it-art.de>';
		$mailSubject = 'Ihre Nachricht an it-art.de';
		$mailText = "Vielen Dank für Ihre Nachricht an IT-art.\n";
		$mailText .= "Ich werde bei nächster Gelegenheit auf Ihre Nachricht antworten. \n\n";
		$mailText .= "---------------------------------------------------------------- \n\n";
		$mailText .= "Ihre Nachricht:\n\n";
		$mailText .= $content;

		@mail ( $mailTo, $mailSubject, $mailText, "From: " . $mailFrom );
	} else {
		echo "<h3>Fehler!</h3>";
		echo "<p>Leider ist ein Fehler aufgetreten, und Ihre Formulardaten konnten nicht an mich gesendet werden. ";
		echo "Bitte senden Sie eie normale E-Mail an <a href=\"mailto:webdevelopment@it-art.de\">webdevelopment@it-art.de</a>.</p>";
	}
}
?>

	</form>
</body>
</html>
