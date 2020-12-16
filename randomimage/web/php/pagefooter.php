<?PHP
if (! $index) {
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
