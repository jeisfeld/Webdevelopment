<h2 class="mobile"><span class="hideondropdown"><?=$appname?> - </span>Content</h2>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/en/overview/">Overview</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/en/settings/">Settings</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/en/organize_photos/">Organize the photos</a>
</p>
<?PHP
}
?>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/en/display_photos/">View photos</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/en/windowsapp/">The Windows application</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/en/downloads/">Downloads</a>
</p>

<p>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/en/impressum/">Legal Notice</a>
</p>
