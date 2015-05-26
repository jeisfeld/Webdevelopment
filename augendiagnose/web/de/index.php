<?PHP
include '../Mobile_Detect.php';
$detect = new Mobile_Detect ();
$isMobile = $detect->isMobile ();
$page = $_GET ["page"];
$page2 = $page . ".html";

if ($isMobile && ! empty ( $page )) {
	header ( "Location: " . $page2 );
}

$queryString = $_SERVER ['QUERY_STRING'];
if (! empty ( $queryString )) {
	$queryString = "?" . $queryString;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Augendiagnose (Android App)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Language" content="de">
<meta name="description" content="Augendiagnose, Jörg Eisfeld">
<meta name="keywords" content="Jörg Eisfeld, Augendiagnose, Iridologie, Android">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../drawable/icon_augendiagnose.ico">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>

<?PHP
if (empty ( $page )) {
	$page2 = "overview.html";
}

if (! $isMobile) {
	?>

<frameset rows="110,*" frameborder="1" framespacing="5" border="1" bordercolor="white">
	<frame src="header.php<?=$queryString?>" name="header" />
	<frameset cols="20%,*" frameborder="1" framespacing="5" border="1" bordercolor="white">
		<frame src="navigation.html" name="navigation" />
		<frame src="<?=$page2?>" name="main" />
	</frameset>
	<noframes>

<?PHP
}
?>

		<body>
			<h2>Augendiagnose - Android App</h2>

			<p>
				<a href="overview.html">Übersicht</a>
			</p>

			<p>
				<a href="settings.html">Einstellungen</a>
			</p>

			<p>
				<a href="organize_photos.html">Organisation der Fotos</a>
			</p>

			<p>
				<a href="display_photos.html">Betrachten der Fotos</a>
			</p>

			<p>
				<a href="windowsapp.html">Die Windows-Anwendung</a>
			</p>

			<p>
				<a href="downloads.html">Downloads</a>
			</p>
		</body>

<?PHP
if (! $detect->isMobile ()) {
	?>

	</noframes>
</frameset>

<?PHP
}
?>

</html>