<p>
	<a href="<?=$urlprefix?>/en/<?=$pagepathname?>">English</a>
	Deutsch
	<a href="<?=$urlprefix?>/es/<?=$pagepathname?>">Español</a>
	<a href="<?=$urlprefix?>/pt/<?=$pagepathname?>">Português</a>
</p>

<?php 
if (!$nopageselected) {
?>
<div id="navigationbutton" class="mobile">
	<a href="javascript:void(0);" onclick="toggleNavigation()">
		<img alt="Home" src="/drawable/ic_menu.png">
	</a>
</div>
<?php 
}
?>

<h1 class="desktop"><?=$appname?> - Android App</h1>
