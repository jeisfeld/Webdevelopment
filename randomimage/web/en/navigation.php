<?PHP
header ( 'Content-Type: text/html; charset=iso-8859-1' );

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
<title>Surprise Image (Android App)</title>
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
		<a href="../?lang=en&page=howto" target="_parent">How to use</a>
	</p>

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick"> <input type="hidden" name="hosted_button_id" value="PAGGKCYNR5FHC">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit"
			alt="PayPal - The safer, easier way to pay online!"> <img alt="" border="0"
			src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
	</form>


</body>

</html>