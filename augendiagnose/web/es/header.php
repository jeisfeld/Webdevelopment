<p>
	<a href="../?app=<?=$app ?>&lang=en&page=<?=$page?>" target="_parent">English</a>
	<a href="../?app=<?=$app ?>&lang=de&page=<?=$page?>" target="_parent">Deutsch</a>
	Español
	<a href="../?app=<?=$app ?>&lang=pt&page=<?=$page?>" target="_parent">Português</a>
</p>

<?php
if ($isMobile) {
	?>
<div id="homebutton">
	<a href="../?app=<?=$app ?>&lang=es&page=navigation" target="_parent">
		<img alt="Home" src="../drawable/ic_home.png">
	</a>
</div>
<?php
}
else {
	?>
<h1><?=$appname?> - Aplicación para Android</h1>
<?php
}
?>
