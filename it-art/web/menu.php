<a id="menubutton" href="javascript:toggleMenu()">
	<img src="<?=$basepath?>/img/icon_menu.png" class="icon">
</a>
<div id="menuitems">
<?php
function menulink($basepath, $pagename, $pagetext, $currentpage)
{
    echo '<a href="'.$basepath.'/'.$pagename.'/" id="link'.$pagename.'"';
    if ($pagename == $currentpage) {
    	echo ' class="chosen"';
    }
    echo ">".$pagetext."</a>\n";
}
function hr() {
	echo "<hr />\n";
}

hr();
menulink($basepath, "startseite", "Startseite", $page);
hr();
menulink($basepath, "webseiten", "Webseiten", $page);
menulink($basepath, "grafik", "Grafik", $page);
menulink($basepath, "musik", "Musik", $page);
menulink($basepath, "apps", "Android-Apps", $page);
hr();
menulink($basepath, "kontakt", "Kontakt", $page);
?>
<a href="javascript:showImpressum()" id="linkimpressum">Impressum</a>
</div>