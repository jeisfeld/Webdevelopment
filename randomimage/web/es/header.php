<p>
	<a href="<?=$path_prefix1?>en/<?=$pagepathname?>">English</a>
	<a href="<?=$path_prefix1?>de/<?=$pagepathname?>">Deutsch</a>
	Español
</p>

<?php 
if (!$nopageselected) {
?>
<div id="navigationbutton" class="mobile">
	<a href="javascript:void(0);" onclick="toggleNavigation()">
		<img alt="Home" src="<?=$path_prefix1?>drawable/ic_menu.png">
	</a>
</div>
<?php 
}
?>

<h1 class="desktop">Imagen Aleatoria - Aplicación de Android</h1>
