<h2 class="mobile">Content</h2>

<p>
	<a href="<?=$path_prefix2?>overview.php?app=<?=$app ?>">Overview</a>
</p>

<p>
	<a href="<?=$path_prefix2?>settings.php?app=<?=$app ?>">Settings</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="<?=$path_prefix2?>organize_photos.php?app=<?=$app ?>">Organize the photos</a>
</p>
<?PHP
}
?>

<p>
	<a href="<?=$path_prefix2?>display_photos.php?app=<?=$app ?>">View photos</a>
</p>

<p>
	<a href="<?=$path_prefix2?>windowsapp.php?app=<?=$app ?>">The Windows application</a>
</p>

<p>
	<a href="<?=$path_prefix2?>downloads.php?app=<?=$app ?>">Downloads</a>
</p>

<p>
	<a href="<?=$path_prefix2?>impressum.php?app=<?=$app ?>">Legal Notice</a>
</p>
