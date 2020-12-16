<?PHP
$language = "es";
$index = true;

// Define some basic strings based on host
include "../php/pageheader.php";

if (! empty ( $_GET ["anchor"] )) {
	$pagefull = $pagefull . "#" . $_GET ["anchor"];
}
?>
	<div id="headerframe" name="headerframe">
		<?php include ("header.php"); ?>
	</div>
	<div id="navigationframe" name="menu" class="desktop">
		<?php include ("navigation.php"); ?>
	</div>
	<div id="mainframe" name="main">
		<?php include ($pagefull); ?>
	</div>
<?php 
include "php/pagefooter.php";
?>
</body>
</html>