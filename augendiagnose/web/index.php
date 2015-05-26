<?PHP
if (strstr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], "de" )) {
	header ( "Location: de/" );
} else if (strstr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], "es" )) {
	header ( "Location: es/" );
} else {
	header ( "Location: en/" );
}
?>
