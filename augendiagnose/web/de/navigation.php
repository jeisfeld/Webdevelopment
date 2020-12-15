<h2 class="mobile">Inhalt</h2>

<p>
	<a href="<?=$path_prefix2?>overview.php?app=<?=$app ?>">Übersicht</a>
</p>

<p>
	<a href="<?=$path_prefix2?>settings.php?app=<?=$app ?>">Einstellungen</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="<?=$path_prefix2?>organize_photos.php?app=<?=$app ?>">Organisation der Fotos</a>
</p>
<?PHP
}
?>

<p>
	<a href="<?=$path_prefix2?>display_photos.php?app=<?=$app ?>">Fotos ansehen</a>
</p>

<p>
	<a href="<?=$path_prefix2?>windowsapp.php?app=<?=$app ?>">Die Windows-Anwendung</a>
</p>

<p>
	<a href="<?=$path_prefix2?>downloads.php?app=<?=$app ?>">Downloads</a>
</p>

<p>
	<a href="<?=$path_prefix2?>impressum.php?app=<?=$app ?>">Impressum</a>
</p>
