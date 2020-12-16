<?PHP
if (! $index && ! $_GET ["createHtmlString"]) {
	?>
</div>
</body>
</html>
<?php
}
if ($index && $nopageselected) {
	?>
<script>
	$("#navigationframe").toggleClass( "startup" );
</script>
<?php
}
?>
