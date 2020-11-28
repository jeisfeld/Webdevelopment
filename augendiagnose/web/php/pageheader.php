<?PHP
header ( 'Content-Type: text/html; charset=utf-8' );

if ($_GET ["app"] == "miniris") {
	$app = "miniris";
	$appname = "Miniris";
}
else if (strpos ( $_SERVER ['REQUEST_URI'], '/miniris' ) !== false) {
	$app = "miniris";
	$appname = "Miniris";
}
else {
	switch ($_SERVER ['HTTP_HOST']) {
		case "miniris.jeisfeld.de" :
		case "miniris.localhost" :
		case "localhost:8308" :
		case "127.0.0.1:8308" :
		case "pc-joerg:8308" :
		case "192.168.1.5:8308" :
		case "localhost:8007" :
		case "127.0.0.1:8007" :
		case "pc-joerg:8007" :
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
				case "pt" :
					$appname = "Diagnóstico ocular";
					break;
			}
			break;
	}
}

function isAugendiagnose() {
	global $app;
	return $app == "augendiagnose";
}
function isMiniris() {
	global $app;
	return $app == "miniris";
}
