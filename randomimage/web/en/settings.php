<h2>
	<span class="mobile">Random Image - </span>Settings
</h2>

<h3>App settings</h3>

<p>
	While being on the main configuration page, you can press the icon <img
		src="<?=$basepath?>/drawable/ic_action_settings.png" /> to go to the settings page. Here you find the following
	categories of settings:
</p>

<h4>Premium version</h4>

<p>You can purchase the app &ldquo;Random Image Pro&rdquo; that enables the use of more than three image lists in the
	app.</p>

<h4>Support</h4>

<p>Here you can open this help page or contact the developer via email.</p>

<h4>
	<a name="randomImageView"></a>
	Random Image View
</h4>

<ul>
	<li><b>Image scaling:</b> Here you can define how the images should be scaled.</li>
	<li><b>Background color:</b> Here you can set the background color to be displayed.</li>
	<li><b>Action when flipping:</b> Here you can specify what happens when flipping away an image.
		<ul>
			<li><b>Always new random image:</b> A new image is randomly selected</li>
			<li><b>Allow to go back one image:</b> Analogous, but you can go back one image</li>
			<li><b>Allow to go back multiple images:</b> Analogous, but you can go back several images</li>
			<li><b>Allow to go back, avoid repetitions:</b> Analogous, but when selecting the next random image repetitions are
				avoided</li>
			<li><b>Display all pictures cyclically:</b> All pictures in the list are shown cyclically</li>
			<li><b>No change:</b> Flipping has no effect</li>
			<li><b>Close screen:</b> Flipping closes the screen</li>
		</ul></li>
	<li><b>Automatic change frequency:</b> Here you can specify if and how frequently the image should automatically
		change.</li>
	<li><b>Use tap instead of flipping:</b> Here you can select if the image can be changed via single tap instead of
		flipping.</li>
	<li><b>Prevent screen timeout:</b> Here you can select if the timeout of the screen should be prevented while
		displaying images.</li>
</ul>

<h4>Other settings</h4>

<ul>
	<li><b>Folder selection:</b> Here you can select between three different mechanisms to add images and folders:
		<ul>
			<li><b>List of image folders (default):</b> Here you get the list of all image folders displayed and can select from
				this list. This is the easiest option.</li>
			<li><b>File browser:</b> Here you can select your image folders in a file browser.</li>
			<li><b>Gallery:</b> Here you can select the image folder via the Gallery app. This may be helpful if you find your
				images easiest in the gallery.</li>
		</ul></li>
	<li><b>Search image folders:</b> Here you can trigger a re-scan of the device memory for image folders.</li>
	<li><b>Preferred image folders (Android 10 and higher):</b> Here you can select picture folders that should always be
		parsed by the app when you edit image lists.</li>
	<li><b>Reset backup folder (Android 10 and higher):</b> Here you can undo the selection of the backup folder so that it
		will be queried again the next time you backup / restore.</li>
	<li><b>Show hidden folders (Android 9 and lower):</b> Here you can select if images from hidden folders are considered.</li>
	<li><b>Apps preventing popup notifications:</b> Here you can select apps so that while using these apps no popup
		notifications are displayed (Android 5 or higher).</li>
	<li><b>Language:</b> Change the language of the app. (Currently supported: English, German and Spanish)</li>
	<li><b>Notify on list change:</b> Here you can decide to display notifications in case of addind/removing images or
		folders to some image list.</li>
	<li><b>Use regexp filter:</b> This allows to globally filter out certain lists or folders from the display.</li>
	<li><b>Display all info messages:</b> There are various info messages in the app which you may disable by pressing the
		button &ldquo;Do not show again&rdquo;. The button &ldquo;Display all info messages&rdquo; re-enables all these
		messages.</li>
	<li><b>Do not display info messages:</b> This disables all kinds of info messages which otherwise need to be switched
		off individually. This is helpful for experienced users who install the app on a new device.</li>
</ul>

<h3>
	<a name="widgetSettings"></a>
	Widget settings
</h3>

<ul>
	<li><b>List Name:</b> Here you can set the image list to be used by the widget.</li>
	<li><b>Edit image list:</b> This link leads to the editing page of the image list assigned to the widget.</li>
	<li><b>Widget Name:</b> Here you can set a name that is displayed in the widget configuration.</li>
	<li><b>Widget Icon:</b> For the mini widget, you may select here an icon image.</li>
	<li><b>Change Frequency:</b> Here you can define how frequently the image should change.</li>
	<li><b>View as list:</b> If this is selected, then the Random Image Deck is displayed as a scrollable list instead of a
		deck.</li>
	<li><b>Display all images cyclically:</b> In the Random Image Deck, you can select here if all images of the list
		should be contained in the deck, or if only parts of the list should be contained (according to the weights of nested
		lists) - this is recommendable for very big image lists.</li>
	<li><b>Background:</b> Here you can set the background color of the widget. The choice &ldquo;Fill frame with
		image&rdquo; means that the image is stretched to fill the whole widget.</li>
	<li><b>Button Style:</b> Here you can define where the two widget buttons will appear. These are:
		<ul>
			<li>A button to change the widget settings.</li>
			<li>A button to change the displayed image.</li>
		</ul></li> &ldquo;Hidden&rdquo; means that the buttons are not displayed, but you can tap on the right and left edge
	of the widget.
	<li><b>Button Color:</b> Here you can select the color of these two buttons.</li>
	<li><b>Use default settings:</b> Here you can specify if, when viewing the image in detail, the default settings should
		be used, or if the settings &ldquo;<b>Image scaling</b>&rdquo;, &ldquo;<b>Background color</b>&rdquo;, &ldquo;<b>Action
			when flipping</b>&rdquo;, &ldquo;<b>Automatic change frequency</b>&rdquo;, &ldquo;<b>Use tap instead of flipping</b>&rdquo;
		and &ldquo;<b>Prevent screen timeout</b>&rdquo; should be defined separately for this widget. (See <a
			href="#randomImageView">above</a> the explanation for these settings.)</br> When tapping the mini-widget, the last
		displayed image is shown again. If you always want to see a new image, you can select the value &ldquo;Always new
		random image&rdquo; in &ldquo;Action when flipping&rdquo;.</li>
	<li><b>Widget usage time:</b> Here you can limit the time how long you are can view images via the mini widget.</li>
	<li><b>Widget locking time:</b> Here you can limit how frequently you may use the mini widget.</li>
</ul>

<h3>
	<a name="notificationSettings"></a>
	Notification settings
</h3>

<ul>
	<li><b>List Name:</b> Here you can set the image list to be used by the notification.</li>
	<li><b>Edit image list:</b> This link leads to the editing page of the image list assigned to the notification.</li>
	<li><b>Notification Name:</b> Here you can set a name that is displayed in the notification configuration.</li>
	<li><b>Notification frequency:</b> Here you can select how frequently a notification should be displayed.</li>
	<li><b>Notification variability:</b> Here you can decide if notifications come in rather equal time intervals or in
		bigger variation.</li>
	<li><b>Start hour for notifications, End hour for notifications:</b> Here you can select a time window in which the
		notifications may come.</li>
	<li><b>Duration:</b> Here you can decide to delete the notifications automatically after a certain time.</li>
	<li><b>Notification style:</b> Here you can select between five types of notifications.</li>
	<li><b>LED color:</b> Here you can select if the LED should blink when the notification is available.</li>
	<li><b>Vibration:</b> Here you can select if the device should vibrate when the notification is displayed.</li>
	<li><b>Colored icon:</b> Here you can select if the notification symbol should be white or colored.</li>
	<li><b>Use default settings:</b> Here you can specify if, when viewing the image in detail, the default settings should
		be used, or if the settings &ldquo;<b>Image scaling</b>&rdquo;, &ldquo;<b>Background color</b>&rdquo;, &ldquo;<b>Action
			when flipping</b>&rdquo;, &ldquo;<b>Automatic change frequency</b>&rdquo;, &ldquo;<b>Use tap instead of flipping</b>&rdquo;
		and &ldquo;<b>Prevent screen timeout</b>&rdquo; should be defined separately for this notification. (See <a
			href="#randomImageView">above</a> the explanation for these settings.)
	
	<li><b>Remove Notification:</b> Here you can remove the notification.</li>

</ul>
