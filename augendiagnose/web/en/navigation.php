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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>

<body>
	<?=$heading?>

	<p>
		<a href="../?lang=en&page=overview" target="_parent">Overview</a>
	</p>

	<p>
		<a href="../?lang=en&page=settings" target="_parent">Settings</a>
	</p>

<?PHP
if (isAugendiagnose ()) {
	?>
	<p>
		<a href="../?lang=en&page=organize_photos" target="_parent">Organize the photos</a>
	</p>
<?PHP
}
?>

	<p>
		<a href="../?lang=en&page=display_photos" target="_parent">Visualize the photos</a>
	</p>

	<p>
		<a href="../?lang=en&page=windowsapp" target="_parent">The Windows application</a>
	</p>

	<p>
		<a href="../?lang=en&page=downloads" target="_parent">Downloads</a>
	</p>

	<p>
		<a href="../?lang=de&page=impressum" target="_parent">Legal Notice</a>
	</p>

</body>

</html>