<p>
        <a href="<?=htmlspecialchars($basepath, ENT_QUOTES, 'UTF-8')?>/en/<?=htmlspecialchars($pagepathname, ENT_QUOTES, 'UTF-8')?>">English</a>
        Deutsch
        <a href="<?=htmlspecialchars($basepath, ENT_QUOTES, 'UTF-8')?>/es/<?=htmlspecialchars($pagepathname, ENT_QUOTES, 'UTF-8')?>">Español</a>
</p>

<?php
if (! $nopageselected) {
	?>
<div id="navigationbutton" class="mobile">
	<a href="javascript:void(0);" onclick="toggleNavigation()">
                <img alt="Home" src="<?=htmlspecialchars($basepath, ENT_QUOTES, 'UTF-8')?>/drawable/ic_menu.png">
	</a>
</div>
<?php
}
?>

<h1 class="desktop">Zufallsbild - Android App</h1>
