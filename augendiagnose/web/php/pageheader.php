<?PHP
header ( 'Content-Type: text/html; charset=iso-8859-1' );

// Define some basic strings based on host
switch ($_SERVER ['HTTP_HOST']) {
	case "miniris.jeisfeld.de" :
	case "miniris.localhost" :
	case "localhost:8007" :
	case "192.168.1.5:8007" :
		$app = "miniris";
		$appname = "Miniris";
		break;
	default :
		$app = "augendiagnose";
		switch ($language) {
			case "de" :
				$appname = "Augendiagnose";
				break;
			case "en" :
				$appname = "Eye Diagnosis";
				break;
			case "es" :
				$appname = "Diagn�stico ocular";
				break;
		}
		break;
}
function isAugendiagnose() {
	global $app;
	return $app == "augendiagnose";
}
function isMiniris() {
	global $app;
	return $app == "miniris";
}
?>