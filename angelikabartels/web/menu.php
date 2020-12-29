<?php
function setLinkClass($pagename, $currentpage, $twoline)
{
    if ($pagename == $currentpage) {
    	if ($twoline) {
    		echo ' class="chosen twoline"';
    	}
    	else {
    		echo ' class="chosen"';
    	}
    }
    else if ($twoline) {
    	echo ' class="twoline"';
    }
}
?>
<a id="menubutton" href="javascript:toggleMenu()">
	<img src="<?=$basepath?>/img/icon_menu_white.png" class="icon">
</a>
<div id="menuitems">
	<a href="<?=$basepath?>/startseite/" id="linkstartseite"<?php setLinkClass($page, "startseite", false);?>>Startseite</a>
	<hr>
	<a href="<?=$basepath?>/lzl/" id="linklzl"<?php setLinkClass($page, "lzl", true);?>>
		Leben zwischen<br> den Leben
	</a>
	<a href="<?=$basepath?>/rueckfuehrung/" id="linkrueckfuehrung"<?php setLinkClass($page, "rueckfuehrung", true);?>>
		Spirituelle Rückführung<br> ins Vorleben
	</a>
	<a href="<?=$basepath?>/pea/" id="linkpea"<?php setLinkClass($page, "pea", true);?>>
		Psychoenergetisches<br> Atmen
	</a>
	<a href="<?=$basepath?>/astrologie/" id="linkastrologie"<?php setLinkClass($page, "astrologie", true);?>>
		Psychologische<br> Astrologie
	</a>
	<a href="<?=$basepath?>/spiritcircle/" id="linkspiritcircle"<?php setLinkClass($page, "spiritcircle", false);?>>Spirit-Circle</a>
	<hr>
	<a href="<?=$basepath?>/uebermich/" id="linkuebermich"<?php setLinkClass($page, "uebermich", false);?>>Über mich</a>
	<a href="<?=$basepath?>/kontakt/" id="linkkontakt"<?php setLinkClass($page, "kontakt", false);?>>Kontakt</a>
	<hr>
	<a href="javascript:showImpressum()" id="linkimpressum">Impressum</a>
	<a href="javascript:openPopup('<?=$basepath?>/allcontent.php')" id="linkprint">Seite drucken</a>
</div>