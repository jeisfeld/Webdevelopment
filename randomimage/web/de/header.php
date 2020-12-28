<p>
	<a href="<?=$basepath?>/en/<?=$pagepathname?>">English</a>
	Deutsch
	<a href="<?=$basepath?>/es/<?=$pagepathname?>">Español</a>
</p>

<?php
if (! $nopageselected) {
	?>
<div id="navigationbutton" class="mobile">
	<a href="javascript:void(0);" onclick="toggleNavigation()">
		<img alt="Home" src="<?=$basepath?>/drawable/ic_menu.png">
	</a>
</div>
<?php
}
?>

<h1 class="desktop">Zufallsbild - Android App</h1>
