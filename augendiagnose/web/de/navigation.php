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

<?PHP
if (isAugendiagnose ()) {
	?>
	<p>
		<a href="../?lang=de&page=organize_photos" target="_parent">Organisation der Fotos</a>
	</p>
<?PHP
}
?>

	<p>
		<a href="../?lang=de&page=display_photos" target="_parent">Betrachten der Fotos</a>
	</p>

	<p>
		<a href="../?lang=de&page=windowsapp" target="_parent">Die Windows-Anwendung</a>
	</p>

	<p>
		<a href="../?lang=de&page=downloads" target="_parent">Downloads</a>
	</p>

</body>

</html>