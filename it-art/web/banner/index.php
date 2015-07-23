<?php
if (strstr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], "de" )) {
	header ( "Location: http://it-art.de" );
	exit ();
}
else {
	header ( "Location: http://augendiagnose.jeisfeld.de" );
	exit ();
}
?>