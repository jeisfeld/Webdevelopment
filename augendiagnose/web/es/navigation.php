<h2 class="mobile">Contenido</h2>

<p>
	<a href="<?=$path_prefix2?>overview.php?app=<?=$app ?>">Información general</a>
</p>

<p>
	<a href="<?=$path_prefix2?>settings.php?app=<?=$app ?>">Ajustes</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="<?=$path_prefix2?>organize_photos.php?app=<?=$app ?>">Organizar nuevas fotos</a>
</p>
<?PHP
}
?>

<p>
	<a href="<?=$path_prefix2?>display_photos.php?app=<?=$app ?>">Ver fotos</a>
</p>

<p>
	<a href="<?=$path_prefix2?>windowsapp.php?app=<?=$app ?>">La aplicación para Windows</a>
</p>

<p>
	<a href="<?=$path_prefix2?>downloads.php?app=<?=$app ?>">Descargas</a>
</p>

<p>
	<a href="<?=$path_prefix2?>impressum.php?app=<?=$app ?>">Aviso legal</a>
</p>
