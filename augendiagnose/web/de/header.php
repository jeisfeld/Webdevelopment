<p>
	<a href="../?app=<?=$app ?>&lang=en&page=<?=$page?>" target="_parent">English</a>
	Deutsch
	<a href="../?app=<?=$app ?>&lang=es&page=<?=$page?>" target="_parent">Español</a>
	<a href="../?app=<?=$app ?>&lang=pt&page=<?=$page?>" target="_parent">Português</a>
</p>

<?php
if ($isMobile) {
	?>
<div id="homebutton">
	<a href="../?app=<?=$app ?>&lang=de&page=navigation" target="_parent">
		<img alt="Home" src="../drawable/ic_home.png">
	</a>
</div>
<?php
}
else {
	?>
<h1><?=$appname?> - Android App</h1>
<?php
}
?>
