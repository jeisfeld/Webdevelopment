<p>
	<a href="../?lang=en&page=<?=$page?>" target="_parent">English</a>
	<a href="../?lang=de&page=<?=$page?>" target="_parent">Deutsch</a>
	Español
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
<h1>Imagen Aleatoria - Aplicación de Android</h1>
<?php
}
?>
