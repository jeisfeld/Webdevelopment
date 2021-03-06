<?php
$protocol = $_SERVER ['HTTPS'] === 'on' ? 'https://' : 'http://';
$basepath = rtrim ( dirname ( $_SERVER ['PHP_SELF'] ), '/\\' );
$baseurl = $protocol . $_SERVER ['SERVER_NAME'] . $basepath . "/";
$pages = array (
		"behandlung",
		"bioresonanz",
		"farbtherapie",
		"hakomi",
		"kontakt",
		"links",
		"tcm",
		"testung",
		"uebermich",
		"startseite",
);
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.google.com/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.google.com/schemas/sitemap/0.9 http://www.google.com/schemas/sitemap/0.9/sitemap.xsd">
<?php
foreach ( $pages as $page ) {
	$mtime = date ( "Y-m-d", filemtime ( "subpages/" . $page . ".php" ) );
	?>
    <url><loc><?=$baseurl.$page."/"?></loc><lastmod><?=$mtime?></lastmod></url>
<?php
}
?>
<url><loc><?=$baseurl?></loc><lastmod><?=$mtime?></lastmod></url>
</urlset>
