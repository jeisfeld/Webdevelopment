<h2 class="mobile">Content</h2>

<p>
	<a href="<?=$path_prefix2?>overview.php">Overview</a>
</p>

<p>
	<a href="<?=$path_prefix2?>settings.php">Settings</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="<?=$path_prefix2?>organize_photos.php">Organize the photos</a>
</p>
<?PHP
}
?>

<p>
	<a href="<?=$path_prefix2?>display_photos.php">View photos</a>
</p>

<p>
	<a href="<?=$path_prefix2?>windowsapp.php">The Windows application</a>
</p>

<p>
	<a href="<?=$path_prefix2?>downloads.php">Downloads</a>
</p>

<p>
	<a href="<?=$path_prefix2?>impressum.php">Legal Notice</a>
</p>
