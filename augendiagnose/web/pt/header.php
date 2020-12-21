<p>
	<a href="<?=$path_prefix1?>en/<?=$pagepathname?>">English</a>
	<a href="<?=$path_prefix1?>de/<?=$pagepathname?>">Deutsch</a>
	<a href="<?=$path_prefix1?>es/<?=$pagepathname?>">Español</a>
	Português
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

<h1 class="desktop"><?=$appname?> - Aplicativo para Android</h1>
