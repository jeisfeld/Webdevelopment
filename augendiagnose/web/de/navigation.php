<h2 class="mobile">Inhalt</h2>

<p>
	<a href="<?=$path_prefix2?>overview.php">Übersicht</a>
</p>

<p>
	<a href="<?=$path_prefix2?>settings.php">Einstellungen</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="<?=$path_prefix2?>organize_photos.php">Organisation der Fotos</a>
</p>
<?PHP
}
?>

<p>
	<a href="<?=$path_prefix2?>display_photos.php">Fotos ansehen</a>
</p>

<p>
	<a href="<?=$path_prefix2?>windowsapp.php">Die Windows-Anwendung</a>
</p>

<p>
	<a href="<?=$path_prefix2?>downloads.php">Downloads</a>
</p>

<p>
	<a href="<?=$path_prefix2?>impressum.php">Impressum</a>
</p>
