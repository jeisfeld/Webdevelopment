<?PHP
include "pageheader.php"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Organize Photos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Organize the photos</h2>

	<p>Here you can organize your eye photos.</p>

	<p>The two last images of the input folder are displayed.</p>

	<p>With the button &ldquo;Switch&rdquo; you can exchange the two photos.</p>

	<p>With the button &ldquo;Other Photos&rdquo;, you can select two different photos from the input folder, by
		clicking on two of the displayed photos. Here, you may also delete photos from the input folder, by using the context
		menu (long click on a photo).</p>

	<p>At &ldquo;Select Name&rdquo; you can set the name of the person from which the eye photos are taken. Here you
		can either select an existing name or enter a new name.</p>

	<p>At &ldquo;Select Date&rdquo; you can select the date on which the photos are listed. Typically this is the
		capture date of the photos, which is preselected. However, you may select a different date. This is necessary in
		particular, if you want to keep more than one eye pair of a person from one date - the app allows only one photo pair
		per day and person.</p>

	<p>With the button &ldquo;OK&rdquo; you can move the selected eye photo pair to the eye photo folder. The photos
		are attached to the given name and date and can then be used by the app.</p>
</body>
</html>