<?PHP
header ( 'Content-Type: text/html; charset=iso-8859-1' );

// Determine menu style
if (empty ( $_GET ["style"] )) {
	$heading = "<h2>Eye Diagnosis - Android App</h2>";
}
else {
	$heading = "";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Eye Diagnosis (Android App)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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

	<p>
		<a href="../?lang=en&page=organize_photos" target="_parent">Organize the photos</a>
	</p>

	<p>
		<a href="../?lang=en&page=display_photos" target="_parent">Visualize the photos</a>
	</p>

	<p>
		<a href="../?lang=en&page=windowsapp" target="_parent">The Windows application</a>
	</p>

	<p>
		<a href="../?lang=en&page=downloads" target="_parent">Downloads</a>
	</p>
</body>

</html>