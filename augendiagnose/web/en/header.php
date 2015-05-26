<?PHP
header('Content-Type: text/html; charset=iso-8859-1');
$queryString = $_SERVER ['QUERY_STRING'];
if (! empty ( $queryString )) {
	$queryString = "?" . $queryString;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Eye Diagnosis (Android App)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<p>
		English <a href="../de/<?=$queryString?>" target="_parent">Deutsch</a> <a href="../es/<?=$queryString?>" target="_parent">Español</a>
	</p>

	<h1>Eye Diagnosis - Android App</h1>
</body>
</html>