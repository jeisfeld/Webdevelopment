<h2><span class="mobile"><?=$appname?> - </span>View photos</h2>

<p>Here you can select the name of a person whose eye photos you want to see. Then you get shown all eye photos of this
	person in a list sorted by date.</p>

<p>Then you have the following possibilities:</p>

<ul>
	<li>Show one of the photos in detail (via click on a photo).</li>

	<li>Show both photos of one date (via click on a date)</li>

	<li>Show two photos of different dates (via long click on one photo and click on a second photo)</li>

	<li>Show two photos of different persons: Select one photo of this person (via long click) and then select a photo of a
		different person.</li>
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
	<li>Change of brightness and contrast via sliders <img src="<?=$basepath?>/drawable/ic_seek_brightness.png" /><img
		src="<?=$basepath?>/drawable/ic_seek_contrast.png" />, as well as change of saturation <img
		src="<?=$basepath?>/drawable/ic_seek_saturation.png" /> and color temperature <img src="<?=$basepath?>/drawable/ic_seek_color_temperature.png" /></li>

	<li>Rotation of the photo (button <img src="<?=$basepath?>/drawable/ic_btn_rotate.png" class="frameless" />)
	</li>

	<li>
		<p>
			Display of iris topographies as overlay (circle button <img src="<?=$basepath?>/drawable/ic_btn_wheel.png" class="frameless" />
			and numbered buttons), adaption of the overlay to the iris and storage of overlay position (lock button <img
				src="<?=$basepath?>/drawable/ic_lock_open.png" />)
		</p>
		<p>When making a long click on one of the numbered buttons, you can change the overlay for this button. For the last
			numbered button, this allows you also to remove the button or add another button.</p>
	</li>

	<li>Set the pupil size for the overlays (button <img src="<?=$basepath?>/drawable/ic_btn_pupil_0.png" class="frameless" />). Here
		you can either keep the pupil centered (<img src="<?=$basepath?>/drawable/ic_btn_pupil_1.png" class="frameless" />) or move it
		freely (<img src="<?=$basepath?>/drawable/ic_btn_pupil_2.png" class="frameless" />).
	</li>

	<li>Store the selected settings of brightness and contrast (via &ldquo;save&rdquo; <img
		src="<?=$basepath?>/drawable/ic_action_save.png" /> button on action bar)
	</li>

	<li>Store the position and zoom (via &ldquo;save&rdquo; <img src="<?=$basepath?>/drawable/ic_action_save.png" /> button on action
		bar)
	</li>

	<li>Share the image (via &ldquo;share&rdquo; <img src="<?=$basepath?>/drawable/ic_action_share.png" /> button on action bar)
	</li>

	<li>Change the comment of the photo (via &ldquo;document&rdquo; <img src="<?=$basepath?>/drawable/ic_comment.png" /> button on
		action bar)
	</li>
</ul>

<p>
	These features may be enabled or disabled via the button &ldquo;Show/Hide utilities&rdquo; (<img
		src="<?=$basepath?>/drawable/ic_tools_up.png" /> <img src="<?=$basepath?>/drawable/ic_tools_down.png" /> <img
		src="<?=$basepath?>/drawable/ic_tools_left.png" /> <img src="<?=$basepath?>/drawable/ic_tools_right.png" />).
</p>
