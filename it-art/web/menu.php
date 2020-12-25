<a id="menubutton" href="javascript:toggleMenu()">
	<img src="/img/icon_menu.png" class="icon">
</a>
<div id="menuitems">
<?php
function menulink($pagename, $pagetext, $currentpage)
{
    echo '<a href="/'.$pagename.'" id="link'.$pagename.'"';
    if ($pagename == $currentpage) {
    	echo ' class="chosen"';
    }
    echo ">".$pagetext."</a>\n";
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
<a href="javascript:showImpressum()" id="linkimpressum">Impressum</a>
</div>