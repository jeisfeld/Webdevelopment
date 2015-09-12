<?PHP
include "pageheader.php";

// Determine menu style
if (empty ( $_GET ["style"] )) {
	$heading = "<h2>${appname} - Android App</h2>";
}
else {
	$heading = "";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> (Android App)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>

<body>
	<?=$heading?>

	<p>
		<a href="../?lang=de&page=overview" target="_parent">Übersicht</a>
	</p>

	<p>
		<a href="../?lang=de&page=settings" target="_parent">Einstellungen</a>
	</p>

	<p>
		<a href="../?lang=de&page=organize_photos" target="_parent">Organisation der Fotos</a>
	</p>

	<p>
		<a href="../?lang=de&page=display_photos" target="_parent">Betrachten der Fotos</a>
	</p>

	<p>
		<a href="../?lang=de&page=windowsapp" target="_parent">Die Windows-Anwendung</a>
	</p>

	<p>
		<a href="../?lang=de&page=downloads" target="_parent">Downloads</a>
	</p>

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick"> <input type="hidden" name="hosted_button_id" value="WGXT99K7YH4F4">
		<input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donate_LG.gif" border="0" name="submit"
			alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal."> <img alt="" border="0"
			src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
	</form>

</body>

</html>