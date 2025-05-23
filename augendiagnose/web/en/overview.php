<h2><?=$appname?> - Overview</h2>

<?PHP
if (isAugendiagnose ()) {
	?>
	
	This App has the purpose to support the visualization of eye photographs on an Android device, in order to do medical
	diagnosis.

<h3>Key Features</h3>

<ul>
	<li>Organization of eye photos by name, date and side (right/left)</li>

	<li>Display of two eye photos in parallel (with full support of individual resizing), so that comparisons are possible
		(such as right-left comparison, earlier-later comparison, different person comparison, or comparison to an iris
		topography).</li>

	<li>Change of brightness and contrast of the photo during display, and overlay with an iris topography.</li>

	<li>You can also save information in the photos, such as brightness adaptions and comments. To be able to store
		information and use the full functionality of the app, you need photos in JPG format.</li>

</ul>

<h3>Main activities</h3>

<h4>Step 1: Organize the photos.</h4>

<p>In this step, you can organize eye photos.</p>

<p>The App expects new eye photos in an input folder. This folder is preconfigured as the target folder of the Eye-Fi
	app or as the default folder of the camera, but can be changed via the settings.</p>

<p>In the &ldquo;Organize new photos&rdquo; activity, you can assign new eye photos from the input folder to a person
	and a date and prepare them in this way for the app. Then the photos will be renamed and moved to the eye photo folder.</p>

<p>
	As further alternative, you may take pictures directly from the app with the device camera. This will normally not give
	photos in adequate quality, but it serves as an alternative to a professional camera, in particular if you use a macro
	lens such as the
	<a href="https://sites.google.com/view/irisocamera/home/english/miniris-eng" target="_blank">Miniris-2</a>
	or
	<a href="https://sites.google.com/view/irisocamera/home/english/iricell-eng" target="_blank">Iricell</a>
	.
</p>

<p>As third alternative,</p>

<h4>Step 2: View photos.</h4>

<p>This is the main purpose of the app, but it requires the photos to be organized via step 1.</p>

<p>In this activity, you can</p>

<ul>
	<li>Show one of the photos in detail. Here you can also change brightness and contrast of the photo, show iris
		topographies as overlay, or write a comment to a photo.</li>

	<li>Display two photos for comparison (and pinch them independently).</li>
</ul>

<h3>Trial period / In-App purchases</h3>

<p>The app allows free use only for a trial period of two weeks. Further use requires the one-time purchase of an in-app
	package.</p>

<h3>Windows application</h3>

<p>
	There is an accompanying Windows application that can be used to view the photos that have been organized with this
	app. For more information, see
	<a href="https://augendiagnose-app.de/en/windowsapp/">https://augendiagnose-app.de/en/windowsapp/</a>
	.
</p>

<h3>Data storage</h3>

<p>The app stores information (like iris position or comments) directly in the JPG image files. This has the advantage
	that all such information is still available if you copy the pictures from one device to another one. To some extent,
	information like comments will be even available when viewing the files in MS Windows.</p>

<p>However, this kind of storage imposes a small risk. It may happen that on some devices, or for pictures from some
	cameras, storage of information in the JPG fails, or possibly even destroys the JPG file. Therefore, it is recommended
	that you keep backups of your JPG files at least when using the app for the first time with a new device or with a new
	camera.</p>

<?PHP
}
else {
	?>

<p>
	This App has the purpose to support the capturing and visualization of iris photographs on an Android device, in order
	to do medical iris diagnosis. It is optimized for the use with the
	<a href="https://sites.google.com/view/irisocamera/home/english/miniris-eng" target="_blank">Miniris-2</a>
	or
	<a href="https://sites.google.com/view/irisocamera/home/english/iricell-eng" target="_blank">Iricell</a>
	attachment .
</p>

<h3>Key Features</h3>

<p>The key features of the App are</p>

<ul>
	<li>Capturing of iris photos using the phone camera (e.g. with the help of the Miniris-2 attachment).</li>
	<li>Organization of iris photos by name, date and side (right/left).</li>
	<li>Display of two iris photos in parallel (with full support of individual resizing).</li>
	<li>Change of brightness and contrast of the photo during display, overlay with an iris topography, and saving of
		comments.</li>
</ul>

<p>The app stores data (such as position of center of eye) as metadata in the JPG files. This allows to transfer stored
	data between different devices by just copying the photos.</p>

<h3>Camera usage</h3>

<p>When opening the camera, you see the following areas:</p>

<ul>
	<li>On the right hand side in the middle there is the button for capturing the photo. After capturing a photo, you can
		decide if you want to keep the photo or if you want to dismiss it and try again.</li>
	<li>Below there is a button that allows taking the photo with the system camera app. This may be of use in case of
		devices with special camera features, such as dual lens.</li>
	<li>In the corners on top of the screen there is the display of the right and left eye photo. The red marking indicates
		which eye is planned for the next photo. By pressing on one of these areas you can change the side.</li>
	<li>On the camera display there is a big circle. This circle indicates the place where the iris should appear on the
		photo.</li>
	<li>On the bottom left, there is a button with a circle and the text &ldquo;zoom&rdquo;. Here you can set the camera
		zoom, and select how big the iris should be on the photo.</li>
	<li>Above, there is a button with the text &ldquo;MACRO&rdquo; or &ldquo;AUTO&rdquo;. Here you may select the focus
		mode of the camera. For closeups, the MACRO mode is normally a good choice.</li>
	<li>Above, there is a flashlight button. Here you can switch on the light of your device. As a flashlight in front of
		your eye is dangerous, this is disabled by default, but you may enable it in the settings. You may also use an LED
		&ldquo;Flash & Fill-in Light&rdquo; plugged in the headphone jack.</li>
</ul>

<p>After taking photos of both eyes, you are directed to a page where you can review the two photos, and where you have
	to enter the name of the person to whom these photos should be assigned. Here you may also change the date of the
	photos - for each person and each date, only one pair of photos may be stored.</p>

<p>If you stop the app after taking one or two eye photos, but before assigning a name, then the next start of the app
	will continue where you stopped - the photos which you have taken will be kept until you decide to delete or overwrite
	them.</p>

<h3>Trial period / In-App purchases</h3>

<p>The app allows free use only for a trial period of two weeks. Further use requires the one-time purchase of an in-app
	package.</p>

<h3>Windows application</h3>

<p>
	There is an accompanying Windows application that can be used to view the photos that have been organized with this
	app. For more information, see
	<a href="https://augendiagnose-app.de/miniris/en/windowsapp/">https://augendiagnose-app.de/miniris/en/windowsapp/</a>
	.
</p>

<?PHP
}
?>

<a name="privacy"></a>
<h3>Privacy Policy</h3>

<p>
		The app &ldquo;<?=$appname?>&rdquo; uses the camera for taking eye photos. The app does not store, collect or send any personal data of any kind.
		All pictures taken by the app are stored only locally on your device.
	</p>
