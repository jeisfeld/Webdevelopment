<?PHP
header ( 'Content-Type: text/html; charset=iso-8859-1' );

// Define some basic strings based on host
switch ($_SERVER ['HTTP_HOST']) {
	case "miniris.jeisfeld.de" :
	case "miniris.localhost" :
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
				$appname = "Diagnóstico ocular";
				break;
		}
		break;
}
?>