<h2 class="mobile">Content</h2>

<p>
	<a href="../?app=<?=$app ?>&lang=en&page=overview" target="_parent">Overview</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=en&page=settings" target="_parent">Settings</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="../?app=<?=$app ?>&lang=en&page=organize_photos" target="_parent">Organize the photos</a>
</p>
<?PHP
}
?>

<p>
	<a href="../?app=<?=$app ?>&lang=en&page=display_photos" target="_parent">View photos</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=en&page=windowsapp" target="_parent">The Windows application</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=en&page=downloads" target="_parent">Downloads</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=de&page=impressum" target="_parent">Legal Notice</a>
</p>
