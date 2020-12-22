<p>
	English
	<a href="/de/<?=$pagepathname?>">Deutsch</a>
	<a href="/es/<?=$pagepathname?>">Español</a>
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

<h1 class="desktop">Random Image - Android App</h1>
