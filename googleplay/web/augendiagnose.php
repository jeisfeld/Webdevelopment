<?PHP
include 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if ($detect->isMobile()) {
	if (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], "de"))
	{ header("Location: de/index_m.html"); }
	else
	{ header("Location: en/index_m.html"); }
} else {
	if (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], "de"))
	{ header("Location: de/index.html"); }
	else
	{ header("Location: en/index.html"); }
}
?>
