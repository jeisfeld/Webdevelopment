<?PHP
header ( 'Content-Type: text/html; charset=utf-8' );

// Determine menu style
if (empty ( $_GET ["style"] )) {
	$heading = "<h2>Random Image - Android App</h2>";
}
else {
	$heading = "";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Random Image (Android App)</title>
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
		<a href="../?lang=en&page=howto" target="_parent">How to use</a>
	</p>

	<p>
		<a href="../?lang=en&page=settings" target="_parent">Settings</a>
	</p>

	<p>
		<a href="../?lang=en&page=releasenotes" target="_parent">Release Notes</a>
	</p>

	<p>
		<a href="../?lang=en&page=impressum" target="_parent">Legal Notice</a>
	</p>

</body>

</html>