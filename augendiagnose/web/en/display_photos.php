<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Visualize Photos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Visualize the photos</h2>

	<p>Here you can select the name of a person whose eye photos you want to see. Then you get shown all eye photos of this
		person in a list sorted by date.</p>

	<p>Then you have the following possibilities:</p>

	<ul>
		<li>Show one of the photos in detail (via click on a photo).</li>

		<li>Show both photos of one date (via click on a date)</li>

		<li>Show two photos of different dates (via long click on one photo and click on a second photo)</li>

		<li>Show two photos of different persons: Select one photo of this person (via long click) and then select a photo of
			a different person.</li>
	</ul>

	<p>Note that iris topography graphics may be organized just like eye photos - this allows to compare eye photos with
		iris topography graphics. Such graphics are not included in the app (except as overlays).</p>

	<h3>Further options in the overview</h3>

	<ul>
		<li>When making a long click on a name in the list of names, you may change or delete the name</li>

		<li>When making a long click on a date in the list of pictures for a name, you may change the date or delete the
			pictures of that date, or you may
			<?PHP if(isMiniris()) { ?>
			move them to a different name.
			<?PHP } else { ?>
			move these pictures back to the input folder (e.g. in order to move them to a different name).
			<?PHP } ?>
		</li>
	</ul>

	<h3>Further options in the detail view</h3>

	<p>In the detail view (one or two photos), you have the following further possibilities:</p>

	<ul>
		<li>Change of brightness and contrast via sliders <img src="../drawable/ic_seek_brightness.png" /><img
			src="../drawable/ic_seek_contrast.png" /></li>

		<li>Display of iris topographies as overlay (numbered buttons), adaption of the overlay to the iris and storage of
			overlay position (lock button <img src="../drawable/ic_lock_open.png" />)
		</li>

		<li>Store the selected settings of brightness and contrast (via &ldquo;save&rdquo; <img
			src="../drawable/ic_action_save.png" /> button on action bar)
		</li>

		<li>Store the position and zoom (via &ldquo;save&rdquo; <img src="../drawable/ic_action_save.png" /> button on action
			bar)
		</li>

		<li>Change the comment of the photo (via &ldquo;document&rdquo; <img src="../drawable/ic_comment.png" /> button on
			action bar)
		</li>
	</ul>

	<p>
		These features may be enabled or disabled via the button &ldquo;Show/Hide utilities&rdquo; <img
			src="../drawable/ic_tools_up.png" />.
	</p>
</body>
</html>