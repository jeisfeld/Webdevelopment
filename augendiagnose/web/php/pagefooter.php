<?PHP
if (! $index && ! $_GET ["createHtmlString"]) {
	?>
</div>
</body>
</html>
<?php
}
if ($index && $startmobilenavigation) {
	?>
<script>
toggleNavigation();
</script>
<?php
}
?>
