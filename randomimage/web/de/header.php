<p>
	<a href="../?lang=en&page=<?=$page?>" target="_parent">English</a>
	Deutsch
	<a href="../?lang=es&page=<?=$page?>" target="_parent">Español</a>
</p>

<?php
if ($isMobile) {
	?>
<div id="homebutton">
	<a href="../?lang=de&page=navigation" target="_parent">
		<img alt="Home" src="../drawable/ic_home.png">
	</a>
</div>
<?php
}
else {
	?>
<h1>Zufallsbild - Android App</h1>
<?php
}
?>
