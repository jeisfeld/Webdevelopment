<h2 class="mobile">Contenido</h2>

<p>
	<a href="<?=$path_prefix2?>overview.php">Información general</a>
</p>

<p>
	<a href="<?=$path_prefix2?>settings.php">Ajustes</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="<?=$path_prefix2?>organize_photos.php">Organizar nuevas fotos</a>
</p>
<?PHP
}
?>

<p>
	<a href="<?=$path_prefix2?>display_photos.php">Ver fotos</a>
</p>

<p>
	<a href="<?=$path_prefix2?>windowsapp.php">La aplicación para Windows</a>
</p>

<p>
	<a href="<?=$path_prefix2?>downloads.php">Descargas</a>
</p>

<p>
	<a href="<?=$path_prefix2?>impressum.php">Aviso legal</a>
</p>
