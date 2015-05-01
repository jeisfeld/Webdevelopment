<?PHP
include 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if ($detect->isMobile()) {
	if (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], "de"))
	{ header("Location: http://augendiagnose.jeisfeld.de/de/index_m.html"); }
	else if (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], "es"))
	{ header("Location: http://augendiagnose.jeisfeld.de/es/index_m.html"); }
	else
	{ header("Location: http://augendiagnose.jeisfeld.de/en/index_m.html"); }
} else {
	if (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], "de"))
	{ header("Location: http://augendiagnose.jeisfeld.de/de/index.html"); }
	else if (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], "es"))
	{ header("Location: http://augendiagnose.jeisfeld.de/es/index.html"); }
	else
	{ header("Location: http://augendiagnose.jeisfeld.de/en/index.html"); }
}
?>
