<p>
	<a href="<?=$urlprefix?>/en/<?=$pagepathname?>">English</a>
	<a href="<?=$urlprefix?>/de/<?=$pagepathname?>">Deutsch</a>
	Español
	<a href="<?=$urlprefix?>/pt/<?=$pagepathname?>">Português</a>
	<a href="<?=$urlprefix?>/fr/<?=$pagepathname?>">Français</a>
</p>

<?php 
if (!$nopageselected) {
?>
<div id="navigationbutton" class="mobile">
	<a href="javascript:void(0);" onclick="toggleNavigation()">
		<img alt="Home" src="<?=$basepath?>/drawable/ic_menu.png">
	</a>
</div>
<?php 
}
?>

<h1 class="desktop"><?=$appname?> - Aplicación para Android</h1>
