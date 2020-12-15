<?PHP
// Identify if subpage is called from index.
$index = true;

// Determine language
if (! empty ( $_GET ["lang"] )) {
	$language = $_GET ["lang"];
}
else {
	if (strstr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], "de" )) {
		$language = "de";
	}
	else if (strstr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], "es" )) {
		$language = "es";
	}
	else if (strstr ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'], "pt" )) {
		$language = "pt";
	}
	else {
		$language = "en";
	}
}

// Determine page
if (empty ( $_GET ["page"] )) {
	$page = "overview";
}
else {
	$page = $_GET ["page"];
}

// Define some basic strings based on host
include "php/pageheader.php";

if (! empty ( $_GET ["anchor"] )) {
	$pagefull = $pagefull . "#" . $_GET ["anchor"];
}
?>
	<div id="headerframe" name="headerframe">
		<?php include ($language."/header.php"); ?>
	</div>
	<div id="menuleftframe" name="menu" class="desktop">
		<?php include ($language."/navigation.php"); ?>
	</div>
	<div id="mainframe" name="main">
		<?php include ($language."/".$pagefull); ?>
	</div>
</body>
</html>