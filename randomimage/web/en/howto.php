<h2>
	<span class="mobile">Random Image - </span>How to use
</h2>

<p>This app displays random images from image lists that you configure. Therefore, you first have to configure an image
	list before you can enjoy the display of random images.</p>

<h3>Setup of the image list</h3>

<h4>First steps</h4>

<p>When you open the app for the first time, the app will first search for image folders on your device (including SD
	card), and an image list will be created that contains all these image folders. You can then use this list in order to
	view random images from your device. Afterwards you can change the image list, if you want to see only certain image
	folders from your device.</p>

<h4>Opening the configuration page</h4>

<p>Generally, in order to configure your image list, you have to open the configuration page of the list. You can access
	this page in the following ways:</p>

<ul>
	<li>By long pressing on an image while viewing it, and then pressing &ldquo;Display image list&rdquo;.</li>
	<li>From the <a href="#mainConfiguration">main configuration page</a> that displays all your image lists.
	</li>
	<li>From the configuration page of a widget or notification using this image list.</li>
</ul>

<h4>Adding images to the image list</h4>

<p>If you want to add images to your list, there are the following options:</p>

<ul>
	<li>On the image list configuration page, press the icon <img src="<?=$basepath?>/drawable/ic_action_plus.png" />. Then
		you see a list of
		<ul>
			<li>Your other image lists (blue)</li>
			<li>The image folders on your device (yellow)</li>
			<li>The parent folders of these folders (orange).</li>
		</ul> Now you can
		<ul>
			<li>Select an image folder (yellow). Then the images from this folder will be displayed. You may then either select
				images from this folder for addition, or you may press the symbol <img
				src="<?=$basepath?>/drawable/ic_action_add_folder.png" /> in order to add the whole folder. You can add a filter in
				order to display only folders containing a certain character string in their path.
			</li>
			<li>Select one of your image lists (blue) in order to add it to your list as nested list.</li>
			<li>Select a parent folder (orange) in order to add it to your list including all subfolders.</li>
			<li>Press the symbol <img src="<?=$basepath?>/drawable/ic_action_checkbox.png" /> and then select multiple folders
				for addition.
			</li>
			<li>Press the symbol <img src="<?=$basepath?>/drawable/ic_action_folder.png" /> and then browse your file system in
				order to select image folders or images for addition.
			</li>
		</ul>
	</li>
	<li>Alternatively, you may display a photo in the gallery app and send the image from there to the Random Image app, or
		you may select multiple photos in the gallery app and send them to the Random Image app.</li>
</ul>

<p>
	Via the symbol <img src="<?=$basepath?>/drawable/ic_action_minus.png" /> you may remove images and folders from your
	image list.
</p>

<p>Included lists are displayed as a blue folder. If you make a long click on such a list, you may adjust how frequent
	images from this nested list are taken. In this way you may increase the display frequency of pictures from small
	lists. The same you may do for folders.</p>

<h3>
	<a name="viewImages"></a>
	View the images
</h3>

<h4>Viewing random images via the launcher</h4>

<ul>
	<li>If you press the launcher icon, the app will start displaying a random image from your random image list on full
		screen. If you have configured multiple image lists, you are first asked to select the image list from which you want
		to display images.</li>
	<li>If you want to see more details, just zoom as usual with two fingers.</li>
	<li>If you want to see a different image from the list, just flip the image away.</li>
	<li>You can go one image back by flipping in the other direction.</li>
	<li>If you want to know the file location of this image, make a long press on the image. From here, you may also do
		other things:
		<ul>
			<li>Show the image in the gallery</li>
			<li>Send the image (e.g. via email)</li>
			<li>Display of the photo location on a map</li>
			<li>Use the image as widget image</li>
			<li>Remove the image from the image list</li>
		</ul>
	</li>
</ul>

<h4>Using widgets</h4>

There are three types of widgets that you can place on your home screen in order to see random images.

<ul>
	<li><b>Mini Widget:</b> This widget behaves like the launcher, as long as you have only one image list. If you have
		multiple image lists configured, then the Mini Widget allows to display a random image of a specific image list.</li>
	<li><b>Random Image Frame:</b> This widget places one of the images of your list on the home screen and changes it in
		regular intervals. You have various configuration possibilities.</li>
	<li><b>Random Image Deck:</b> This widget places the images of your list in random order as a card deck or as
		scrollable list on the home screen. You can move from one image to the next.</li>
</ul>

<p>If you tap on the Random Image Frame or the Random Image Deck, then you can see the displayed photo in detail. From
	here, you may flip the image away in order to see other images from the same list.</p>

<p>
	The Random Image Frame also allows you to switch to a new random image (via tap on the symbol <img
		src="<?=$basepath?>/drawable/ic_widget_next.png" /> on the right border of the frame), or to change the configuration
	of the frame (via tap on the symbol <img src="<?=$basepath?>/drawable/ic_widget_settings.png" /> on the left border of
	the frame).
</p>

<p>If you have multiple image lists, then you can place widgets for multiple image lists on your home screen, so for
	example you may have always a photo of your spouse and a photo of your last vacation in parallel on your screen.</p>
<p>Please note that directly after a reboot of the phone or tablet, the external SD card is not yet accessible.
	Therefore, after a reboot, the widgets can only display images from internal phone memory. If you want to see a nice
	image directly after reboot, you should add one nice photo from internal phone memory to each of your image lists.</p>

<h4>Using notifications</h4>

<p>
	As alternative to widgets, you may use notifications to see images from your image lists at varying time intervals. The
	configuration of notifications can be done from the main configuration page. You find more details in the section
	<a href="settings.html#notificationSettings">Notification settings</a>
	.
</p>



<h3>
	<a name="mainConfiguration"></a>
	Main configuration
</h3>

<p>The main configuraton page may be accessed in the following ways:</p>

<ul>
	<li>By adding the launcher for the random image configuration to your home screen. (This is a second launcher provided
		by the app.)</li>
	<li>When you are on the configuration page of an image list, by tapping either on the top left corner or on the icon <img
		src="<?=$basepath?>/drawable/ic_action_home.png" />.
	</li>
</ul>

<p>Here you have the following possibilities:</p>

<ul>
	<li>Go to the configuration of an individual image list (by pressing on an image list symbol)</li>
	<li>Add a new image list (by pressing <img src="<?=$basepath?>/drawable/ic_action_plus.png" />)
	</li>
	<li>Select multiple image lists for backup, restore or deletion (by pressing <img
		src="<?=$basepath?>/drawable/ic_action_checkbox.png" />)
	</li>
	<li>Go to the generall app settings (by pressing <img src="<?=$basepath?>/drawable/ic_action_settings.png" />)
	</li>
	<li>Change the widget settings</li>
	<li>Change the notification settings (and add or delete notifications)</li>
	<li>Backup, restore, rename, delete or clone a single image list, or create a shortcut (via long pressing an image list
		symbol</li>
</ul>
