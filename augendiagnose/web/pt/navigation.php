<h2 class="mobile">Conteúdo</h2>

<p>
	<a href="<?=$path_prefix2?>overview.php?app=<?=$app ?>">Informações gerais</a>
</p>

<p>
	<a href="<?=$path_prefix2?>settings.php?app=<?=$app ?>">Ajustes</a>
</p>

<?PHP
if (isAugendiagnose ()) {
	?>
<p>
	<a href="<?=$path_prefix2?>organize_photos.php?app=<?=$app ?>">Organize novas fotos</a>
</p>
<?PHP
}
?>

<p>
	<a href="<?=$path_prefix2?>display_photos.php?app=<?=$app ?>">Visualizar fotos</a>
</p>

<p>
	<a href="<?=$path_prefix2?>windowsapp.php?app=<?=$app ?>">O aplicativo para o Windows</a>
</p>

<p>
	<a href="<?=$path_prefix2?>downloads.php?app=<?=$app ?>">Downloads</a>
</p>

<p>
	<a href="<?=$path_prefix2?>impressum.php?app=<?=$app ?>">Aviso Legal</a>
</p>
