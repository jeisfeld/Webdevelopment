<h2 class="mobile">Inhalt</h2>

<p>
	<a href="../?app=<?=$app ?>&lang=de&page=overview" target="_parent">Übersicht</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=de&page=settings" target="_parent">Einstellungen</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="../?app=<?=$app ?>&lang=de&page=organize_photos" target="_parent">Organisation der Fotos</a>
</p>
<?PHP
}
?>

<p>
	<a href="../?app=<?=$app ?>&lang=de&page=display_photos" target="_parent">Fotos ansehen</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=de&page=windowsapp" target="_parent">Die Windows-Anwendung</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=de&page=downloads" target="_parent">Downloads</a>
</p>

<p>
	<a href="../?app=<?=$app ?>&lang=de&page=impressum" target="_parent">Impressum</a>
</p>
