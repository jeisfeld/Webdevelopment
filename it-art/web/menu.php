<a id="menubutton" href="javascript:toggleMenu()">
	<img src="/img/icon_menu.png" class="icon">
</a>
<div id="menuitems">
<?php
function menulink($pagename, $pagetext, $currentpage)
{
    echo '<a href="/'.$pagename.'" id="'.$pagename.'"';
    if ($pagename == $currentpage) {
    	echo ' class="chosen"';
    }
    echo "><span>".$pagetext."</span></a>\n";
}
function hr() {
	echo "<hr />\n";
}

hr();
menulink("startseite", "Startseite", $page);
hr();
menulink("webseiten", "Webseiten", $page);
menulink("grafik", "Grafik", $page);
menulink("musik", "Musik", $page);
menulink("apps", "Android-Apps", $page);
hr();
menulink("kontakt", "Kontakt", $page);
?>
</div>