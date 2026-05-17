<h2 class="mobile"><span class="hideondropdown"><?=$appname?> - </span>Inhalt</h2>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/de/overview/">Übersicht</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/de/settings/">Einstellungen</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/de/organize_photos/">Organisation der Fotos</a>
</p>
<?PHP
}
?>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/de/display_photos/">Fotos ansehen</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/de/windowsapp/">Die Windows-Anwendung</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/de/downloads/">Downloads</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/de/impressum/">Impressum</a>
</p>
