<p>
	<a href="<?=$urlprefix?>/en/<?=$pagepathname?>">English</a>
	<a href="<?=$urlprefix?>/de/<?=$pagepathname?>">Deutsch</a>
	<a href="<?=$urlprefix?>/es/<?=$pagepathname?>">Español</a>
	Português
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

<h1 class="desktop"><?=$appname?> - Aplicativo para Android</h1>
