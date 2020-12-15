<p>
	English
	<a href="../?lang=de&page=<?=$page?>" target="_parent">Deutsch</a>
	<a href="../?lang=es&page=<?=$page?>" target="_parent">Español</a>
</p>

<?php
if ($isMobile) {
	?>
<div id="homebutton">
	<a href="../?lang=en&page=navigation" target="_parent">
		<img alt="Home" src="../drawable/ic_home.png">
	</a>
</div>
<?php
}
else {
	?>
<h1>Random Image - Android App</h1>
<?php
}
?>

