<?PHP
include "pageheader.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?=$appname?> - Settings</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../stylesheets/styles.css" rel="Stylesheet" type="text/css">
</head>
<body>
	<h2>Settings</h2>

	The application allows the following settings:
<?PHP
if (isAugendiagnose ()) {
	?>
	<h3>Input folder for new eye photos</h3>

	<p>This is the folder, from which the app imports new eye photos. By default, this is either the target folder of the
		Eye-Fi app or the standard folder of the Camera app. However, you can configure here any other folder.</p>

	<p>Background regarding the Eye-Fi app: typically, the camera of the mobile device is not sufficient to capture eye
		photos in high quality. A more practical approach is to use an external camera with Eye-Fi SD card, which transfers
		the photos via WLAN to the mobile device.</p>
<?PHP
}
?>

	<h3>Display Settings</h3>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">Last photo is right eye</td>
			<td width="70%" valign="top">Here you can define if the last photo is the right or the left eye. By default this is
				the left eye (which means that you made first a photo of the right eye and then of the left eye).</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Sort by last name</td>
			<td width="70%" valign="top">Here you may decide that names are not ordered strictly alphabetically as given, but by
				the last name.</td>
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
			<td width="30%" valign="top">Hints</td>
			<td width="70%" valign="top">Here you can re-enable all hints, or you can disable all existing hints (which is
				helpful after new installation if you know the app already).</td>
		</tr>
	</table>

	<h3>Storage and Memory Settings</h3>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">Eye Photo Folder</td>
			<td width="70%" valign="top"><p>This is the folder in which the app manages the eye photos. Normally, you need not
					change this. From here, you can copy the photos to other devices.</p>

				<p>The predefined folder is &ldquo;EyePhotos&rdquo;.</p>

				<p>You can select here a folder either on your device memory or on an SD card. In Android 4.4 (Kitkat), storage on
					SD card has some limitations, therefore some operations will take longer. In Android 5, when selecting a folder on
					SD card, you will have to grant access rights to the SD card via Android&apos;s Storage Access Framework.</p></td>
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
						CPU, but details in the photo may be lost. The &ldquo;magnifier&rdquo; button <img
						src="../drawable/ic_clarity.png" /> allows to display the current picture detail in full resolution.</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Save additional data in jpeg</td>
			<td width="70%" valign="top">Here you can limit the storage of data in the JPG files by the app.

				<ul>
					<li><b>Store in EXIF (recommended):</b> The app stores relevant information in the JPG file, even in standard
						fields which are visible in Windows.</li>

					<li><b>Store in custom fields:</b> The app stores information in the JPG file, but only in separate fields.
						Standard fields remain unchanged; the data exchange with Windows is not possible.</li>

					<li><b>Don&apos;t store data in images:</b> The app does not store information in JPG files. (This limits the
						functionality of the app.)</li>
				</ul>
			</td>
		</tr>
	</table>

	<h3>Remove Ads / Donate</h3>

	<p>This page offers various buttons by which you can make a donation to the developer - the development of this app
		takes lot of time, therefore it would be good to get something back from the people who find this app useful.</p>

	<p>In addition, there are the following features:</p>

	<table width="100%" border="1">
		<tr>
			<td width="30%" valign="top">Remove Ads</td>
			<td width="70%" valign="top">Here you can disable all ads (currently only in US). This feature can be enabled via
				donation or via user key.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">Contact the developer</td>
			<td width="70%" valign="top">Here you can send an email to the developer in case you have wishes or problems.</td>
		</tr>
		<tr>
			<td width="30%" valign="top">User key</td>
			<td width="70%" valign="top">A user key that allows unlocking of additional functionality.</td>
		</tr>
	</table>
</body>
</html>