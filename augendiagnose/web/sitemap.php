<?php
$protocol = $_SERVER ['HTTPS'] === 'on' ? 'https://' : 'http://';
$basepath = rtrim ( dirname ( $_SERVER ['PHP_SELF'] ), '/\\' );
$baseurl = $protocol . $_SERVER ['SERVER_NAME'] . $basepath . "/";
$langs = array (
		"de",
		"en",
		"es",
		"pt"
);
$pages = array (
		"overview",
		"display_photos",
		"organize_photos",
		"settings",
		"windowsapp",
		"downloads",
		"impressum"
);
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.google.com/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.google.com/schemas/sitemap/0.9 http://www.google.com/schemas/sitemap/0.9/sitemap.xsd"> <url>
<loc><?=$baseurl?></loc><lastmod>2020-12-29</lastmod></url>

<?php
foreach ( $langs as $lang ) {
	foreach ( $pages as $page ) {
		$path = $lang . "/" . $page;
		$mtime = date ( "Y-m-d", filemtime ( $path . ".php" ) );
		?>
    <url><loc><?=$baseurl.$path."/"?></loc><lastmod><?=$mtime?></lastmod></url>
    <?php
		if ($page !== "organize_photos") {
			?>
    <url><loc><?=$baseurl."miniris/".$path."/"?></loc><lastmod><?=$mtime?></lastmod></url>
    <?php
		}
		?>
<?php
	}
}
?>
</urlset>
