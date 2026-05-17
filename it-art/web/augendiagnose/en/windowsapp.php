<h2><span class="mobile"><?=$appname?> - </span>The Windows Application</h2>

<p>There is an accompanying Windows application that allows to visualize the eye photos on a Windows desktop like in the
	Android app.</p>

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
	<li><b>Version 0.1.16:</b> Added two more topographies. Updated to Java 23.</li>

	<li><b>Version 0.1.15:</b> Added Jausas topography (French). Bugfixes.</li>

	<li><b>Version 0.1.14:</b> Added overlays in French and Polish.</li>

	<li><b>Version 0.1.13:</b> Added numeric Rayid topography. Bugfixes.</li>

	<li><b>Version 0.1.12:</b> Added Portuguese localisation. Bugfixes.</li>

	<li><b>Version 0.1.11:</b> Enabled handling of single eye photos. Bugfixes.</li>

	<li><b>Version 0.1.10:</b> Simple showing and hiding of comment pane.</li>

	<li><b>Version 0.1.9:</b> Simple change between single image and double image view.</li>

	<li><b>Version 0.1.8:</b> Image zooming via touchscreen.</li>

	<li><b>Version 0.1.7:</b> Enabled change of saturation and color temperature.</li>

	<li><b>Version 0.1.6:</b> Bugfixes.</li>

	<li><b>Version 0.1.5:</b> Users can now specify which overlays are associated with the overlay buttons. Bugfixes.</li>

	<li><b>Version 0.1.4:</b> Adaption of overlays to the pupil size. Correct display of rotated photos.</li>

	<li><b>Version 0.1.3:</b> Enable display of two photos simultaneously. Enable quick full-screen display.</li>

	<li><b>Version 0.1.2:</b> Give warning when closing window while editing comment.</li>

	<li><b>Version 0.1.1:</b> Enabled selection of language.</li>

	<li><b>Version 0.1:</b> Initial version. Allows browsing through the organized eye photos, displaying an eye photo,
		displaying overlays, changing brightness and contrast, editing the comment.</li>
</ul>

<h3>
        <a href="<?=htmlspecialchars($urlprefix, ENT_QUOTES, 'UTF-8')?>/en/downloads/">Go to download page</a>
</h3>
