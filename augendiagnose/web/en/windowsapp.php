<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - The Windows Application</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>The Windows Application</h2>

	<p>There is an accompanying Windows application that allows to visualize the eye photos on a Windows desktop like in
		the Android app.</p>

	<p>The Windows application is only intended as add-on to the Android app. It allows less features than the Android app.
		In particular, it does not allow to organize new photos and to set the position of the overlays. However, it allows to
		show the photos, show the overlays, and edit the comment.</p>

	<p>
		In order to use the Windows application, you have to synchronize the eye photo folder of your Android device with a
		corresponding eye photo folder on your Windows desktop. This folder needs to be configured in the settings.<br> One
		possible way of synchronisation is to install a WebDAV app on your Android device and to install some synchronization
		application on your Windows desktop (such as FreeFileSync). Then you can do the configuration in a way that the
		synchronization application accesses your Android device wirelessly via WebDAV.
	</p>

	<h3>Menu entries</h3>
	<ul>
		<li><b>File&rarr;Exit:</b> Exit the application.</li>

		<li><b>View&rarr;Overlay pane:</b> Show or hide the pane for displaying overlays or modifying brightness/contrast.</li>

		<li><b>View&rarr;Comment pane:</b> Show or hide the pane for editing the comment.</li>

		<li><b>View&rarr;Split window:</b> Split of the window, so that two photos can be visualized in parallel.</li>

		<li><b>Window&rarr;Close:</b> Here you can close the detailed eye view. (Alternatively you can click on the cross at
			the top right.)</li>

		<li><b>Window&rarr;Settings:</b> Change the settings.</li>

		<li><b>Help&rarr;Check for updates:</b> Here you can check if there is an update of the application. If there is a new
			update, you will be also informed once at application start.</li>

		<li><b>Help&rarr;Uninstall application:</b> Here you can uninstall the application.</li>
	</ul>

	<h3>Settings</h3>

	<ul>
		<li><b>Eye Photo Folder:</b> Here you have to select the main folder where you store the eye photos. This folder must
			have the same structure as in the Android app.</li>

		<li><b>Max Bitmap size:</b> This is the size to which photos are scaled down before displaying.</li>

		<li><b>Thumbnail size:</b> This is the size to which photos are scaled down in the thumbnail view.</li>

		<li><b>Default overlay color:</b> Here you can define the default color for iris topography overlays.</li>

		<li><b>Sort by last name:</b> Here you may decide that names are not ordered strictly alphabetically as given, but by
			the last name.</li>

		<li><b>Update Automatically:</b> If you select this, then new versions of the application will be installed
			automatically on startup.</li>

		<li><b>Language:</b> Here you can change the language in which the application is displayed. A value change forces a
			restart of the application.</li>
	</ul>

	<h3>Release Notes</h3>

	<ul>
		<li><b>Version 0.1.3:</b> Enable display of two photos simultaneously. Enable quick full-screen display.</li>

		<li><b>Version 0.1.2:</b> Give warning when closing window while editing comment.</li>

		<li><b>Version 0.1.1:</b> Enabled selection of language.</li>

		<li><b>Version 0.1:</b> Initial version. Allows browsing through the organized eye photos, displaying an eye photo,
			displaying overlays, changing brightness and contrast, editing the comment.</li>
	</ul>

	<h3>
		<a href="../?lang=en&page=downloads" target="_parent">Go to download page</a>
	</h3>

</body>
</html>