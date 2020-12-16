<?php
$language = "en";
if (! $index) {
	include "../php/pageheader.php";
	?>
<div id="headerframe" name="headerframe">
	<?php include ("header.php"); ?>
</div>
<div id="navigationframe" name="menu" class="desktop">
	<?php include ("navigation.php"); ?>
</div>
<div id="mainframe" name="main">
<?php
}
?>