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
<title>Diagn�stico ocular (Aplicaci�n para Android)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<p>
		<a href="../en/<?=$queryString?>" target="_parent">English</a> <a href="../de/<?=$queryString?>" target="_parent">Deutsch</a> Espa�ol
	</p>

	<h1>Diagn�stico ocular - Aplicaci�n para Android</h1>
</body>
</html>