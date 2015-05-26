<?PHP
$queryString = $_SERVER ['QUERY_STRING'];
if (! empty ( $queryString )) {
	$queryString = "?" . $queryString;
}

if (strstr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], "de" )) {
	$languageString = "de";
} else if (strstr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], "es" )) {
	$languageString = "es";
} else {
	$languageString = "en";
}

header ( "Location: " . $languageString . "/" . $queryString );

?>
