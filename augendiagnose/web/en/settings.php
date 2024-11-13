<h2><?php if (!array_key_exists("createHtmlString", $_GET)) {?><span class="mobile"><?=$appname?> - </span><?php }?>Settings</h2>

The application allows the following settings:
<?PHP
if (isAugendiagnose ()) {
	?>
<h3>Input Settings</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Input folder for new eye photos</td>
		<td width="70%" valign="top">
			<p>This is the folder, from which the app imports new eye photos. By default, this is either the target folder of the
				Eye-Fi app or the standard folder of the Camera app. However, you can configure here any other folder.</p>

			<p>Background regarding the Eye-Fi app: typically, the camera of the mobile device is not sufficient to capture eye
				photos in high quality. A more practical approach is to use an external camera with Eye-Fi SD card, which transfers
				the photos via WLAN to the mobile device.</p>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Last photo is right eye</td>
		<td width="70%" valign="top">Here you can define if the last photo is the right or the left eye. By default this is
			the left eye (which means that you made first a photo of the right eye and then of the left eye).</td>
	</tr>
</table>
<?PHP
}
?>

<h3>Display Settings</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Sort by last name</td>
		<td width="70%" valign="top">Here you may decide that names are not ordered strictly alphabetically as given, but by
			the last name.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Guided setup of iris and pupil position</td>
		<td width="70%" valign="top">Here you may decide if you are guided through setting the iris and pupil position before
			you can display overlays.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Default overlay color</td>
		<td width="70%" valign="top">Here you can define the default color for iris topography overlays. (Standard: red)</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Language</td>
		<td width="70%" valign="top">Here you can change the language in which the app is displayed. A value change forces a
			restart of the app.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Display all hints</td>
		<td width="70%" valign="top">Here you can re-enable all hints.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Do not display hints</td>
		<td width="70%" valign="top">Here you can disable all existing hints (which is helpful after new installation if you
			know the app already).</td>
	</tr>
</table>

<h3>Storage and Memory Settings</h3>

<table width="100%" border="1">
	<tr>
		<td width="30%" valign="top">Eye Photo Folder</td>
		<td width="70%" valign="top"><p>This is the folder in which the app manages the eye photos. Normally, you need not
				change this. From here, you can copy the photos to other devices.</p>

			<p>The predefined folder is &ldquo;EyePhotos&rdquo;.</p>

			<p>You can select here a folder either on your device memory or on an SD card. In Android 4.4 (Kitkat), storage on SD
				card has some limitations, therefore some operations will take longer. In Android 5, when selecting a folder on SD
				card, you will have to grant access rights to the SD card via Android&apos;s Storage Access Framework.</p></td>
	</tr>
	<tr>
		<td width="30%" valign="top">Max Bitmap size</td>
		<td width="70%" valign="top">This is the size to which photos are scaled down before displaying. This downscaling is
			required to save device memory. The default value is 2048. In devices with little memory, it may be required to
			configure a smaller value (such as 1024). Too big values may crash the application.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Show image in full resolution</td>
		<td width="70%" valign="top">Here you can decide under which circumstances the photo is displayed in full resolution,
			which allows to see more details on the photo, but consumes memory and computing time.

			<ul>
				<li><b>Always load automatically:</b> The app always stores the photos in full resolution in memory. This gives the
					best user experience on high end devices, but may lead to crashes if there is not enough memory available.</li>

				<li><b>Load automatically when displaying single photo:</b> The app shows full resolution only when displaying a
					single image. This requires half of the memory.</li>

				<li><b>Load only on demand:</b> The app does not show the image in full resolution. This requires least memory and
					CPU, but details in the photo may be lost. The &ldquo;magnifier&rdquo; button <img src="<?=$basepath?>/drawable/ic_clarity.png" />
					allows to display the current picture detail in full resolution.</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Save additional data in jpeg</td>
		<td width="70%" valign="top">Here you can limit the storage of data in the JPG files by the app.

			<ul>
				<li><b>Store in EXIF (recommended):</b> The app stores relevant information in the JPG file, even in standard fields
					which are visible in Windows.</li>

				<li><b>Store in custom fields:</b> The app stores information in the JPG file, but only in separate fields. Standard
					fields remain unchanged; the data exchange with Windows is not possible.</li>

				<li><b>Don&apos;t store data in images:</b> The app does not store information in JPG files. (This limits the
					functionality of the app.)</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Automatic detection of iris</td>
		<td width="70%" valign="top">Here you can select if the app should automatically try to find the position of iris and
			pupil in the eye photos. This typically will simplify the positioning of overlays, but it requires many resources of
			the phone, and the result may be incorrect.</td>
	</tr>
</table>

<h3>Camera Settings</h3>

<table width="100%" border="1">
<?PHP
if (isMiniris ()) {
	?>
		<tr>
		<td width="30%" valign="top">Start with left eye</td>
		<td width="70%" valign="top">Here you can define which eye should be photographed first. By default this is the right
			eye.</td>
	</tr>
<?PHP
}
?>
		<tr>
		<td width="30%" valign="top">Camera compatibility</td>
		<td width="70%" valign="top">If your device runs on Android 5 or higher, then here you can select if the camera
			functionality should use the new Android 5 features or not. Selection of &ldquo;Android 4&rdquo; makes sense in case
			of issues with Android 5 compatibility.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Enable flash</td>
		<td width="70%" valign="top">Here you may enable the flashlight functionality. By default, this is disabled, as it is
			dangerous to use the flashlight close to the eye.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Enable external LED flash</td>
		<td width="70%" valign="top">Here you can set whether the use of a &ldquo;Flash & Fill-in Light&rdquo; plugged in the
			headphone jack should be supported.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Use front camera</td>
		<td width="70%" valign="top">Here you can specify to use the front camera for taking pictures. By default, the rear
			camera is used.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Show link to Camera App</td>
		<td width="70%" valign="top">Here you can specify if the button for taking photos with the system camera app should be
			displayed.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">Camera screen position</td>
		<td width="70%" valign="top">If the Miniris ribbon hides some buttons on the camera screen, then you can use this
			setting to shift the camera screen to the right or left.</td>
	</tr>
</table>

<h3>Overlay Button Configuration</h3>

<p>This page allows you to define which iris topography overlays can be displayed by pressing the overlay buttons. The
	same setting can also be done while displaying the photos, by making a long click on some overlay button.</p>

<h3>Premium Packs / Support</h3>

<p>This page offers the possibility to purchase a premium pack which gives you unlimited access to all functions of the
	app.</p>

<p>In addition, there are the following features:</p>

<table width="100%" border="1">
<?PHP
if (isAugendiagnose ()) {
	?>
		<tr>
		<td width="30%" valign="top">Remove Ads (only for users of older versions)</td>
		<td width="70%" valign="top">Here you can disable all ads (currently only in US). This feature can be enabled via
			donation or via user key.</td>
	</tr>
<?PHP
}
?>
		<tr>
		<td width="30%" valign="top">Contact the developer</td>
		<td width="70%" valign="top">Here you can send an email to the developer in case you have wishes or problems.</td>
	</tr>
	<tr>
		<td width="30%" valign="top">User key</td>
		<td width="70%" valign="top">A user key that allows unlocking of additional functionality.</td>
	</tr>
</table>
