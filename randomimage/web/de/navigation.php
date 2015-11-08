<?PHP
header ( 'Content-Type: text/html; charset=utf-8' );

// Determine menu style
if (empty ( $_GET ["style"] )) {
	$heading = "<h2>Überraschungsbild - Android App</h2>";
}
else {
	$heading = "";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Überraschungsbild (Android App)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>

<body>
	<?=$heading?>

	<p>
		<a href="../?lang=de&page=overview" target="_parent">Übersicht</a>
	</p>

	<p>
		<a href="../?lang=de&page=howto" target="_parent">Hinweise zur Benutzung</a>
	</p>

	<p>
		<a href="../?lang=de&page=releasenotes" target="_parent">Versionshinweise</a>
	</p>

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick"> <input type="hidden" name="hosted_button_id" value="CVPY85HARRCPQ">
		<input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donate_LG.gif" border="0" name="submit"
			alt="Jetzt einfach, schnell und sicher online bezahlen � mit PayPal."> <img alt="" border="0"
			src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
	</form>

</body>

</html>