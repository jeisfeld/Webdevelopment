<p>
	<a href="<?=$path_prefix1?>en/<?=$pagepathname?>">English</a>
	Deutsch
	<a href="<?=$path_prefix1?>es/<?=$pagepathname?>">Español</a>
	<a href="<?=$path_prefix1?>pt/<?=$pagepathname?>">Português</a>
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

<h1 class="desktop"><?=$appname?> - Android App</h1>
