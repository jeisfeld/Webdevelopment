<?php
$protocol = $_SERVER ['HTTPS'] === 'on' ? 'https://' : 'http://';
$basepath = rtrim ( dirname ( $_SERVER ['PHP_SELF'] ), '/\\' );
$baseurl = $protocol . $_SERVER ['SERVER_NAME'] . $basepath . "/";
$pages = array (
		"astrologie",
		"kontakt",
		"lzl",
		"pea",
		"rueckfuehrung",
		"spiritcircle",
		"uebermich"
);
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.google.com/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.google.com/schemas/sitemap/0.9 http://www.google.com/schemas/sitemap/0.9/sitemap.xsd"> <url>
<loc><?=$baseurl?></loc><lastmod>2020-12-30</lastmod></url>

<?php
foreach ( $pages as $page ) {
	$mtime = date ( "Y-m-d", filemtime ( "subpages/" . $page . ".php" ) );
	?>
    <url><loc><?=$baseurl.$page."/"?></loc><lastmod><?=$mtime?></lastmod></url>
<?php
}
?>
</urlset>
