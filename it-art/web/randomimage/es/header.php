<p>
        <a href="<?=htmlspecialchars($basepath, ENT_QUOTES, 'UTF-8')?>/en/<?=htmlspecialchars($pagepathname, ENT_QUOTES, 'UTF-8')?>">English</a>
        <a href="<?=htmlspecialchars($basepath, ENT_QUOTES, 'UTF-8')?>/de/<?=htmlspecialchars($pagepathname, ENT_QUOTES, 'UTF-8')?>">Deutsch</a>
	Español
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

<h1 class="desktop">Imagen Aleatoria - Aplicación de Android</h1>
