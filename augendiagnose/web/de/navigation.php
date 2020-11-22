<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<html>
<head>
<title><?=$appname?> (Android App)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>

<body>
	<?=$heading?>

	<p>
		<a href="../?app=<?=$app ?>&lang=de&page=overview" target="_parent">Übersicht</a>
	</p>

	<p>
		<a href="../?app=<?=$app ?>&lang=de&page=settings" target="_parent">Einstellungen</a>
	</p>

<?PHP
if (isAugendiagnose ()) {
	?>
	<p>
		<a href="../?app=<?=$app ?>&lang=de&page=organize_photos" target="_parent">Organisation der Fotos</a>
	</p>
<?PHP
}
?>

	<p>
		<a href="../?app=<?=$app ?>&lang=de&page=display_photos" target="_parent">Fotos ansehen</a>
	</p>

	<p>
		<a href="../?app=<?=$app ?>&lang=de&page=windowsapp" target="_parent">Die Windows-Anwendung</a>
	</p>

	<p>
		<a href="../?app=<?=$app ?>&lang=de&page=downloads" target="_parent">Downloads</a>
	</p>

	<p>
		<a href="../?app=<?=$app ?>&lang=de&page=impressum" target="_parent">Impressum</a>
	</p>

</body>

</html>