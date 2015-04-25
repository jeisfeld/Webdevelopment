/**
 * Utility method to mark the menu entry of the current page as "chosen".
 *
 * @param frame
 *            The menu frame
 * @param id
 *            The main page id
 */
function markChosen(frame, id) {
	if (frame) {
		var t = $(frame.getElementById(id));
		var s = $(frame).find('a');
		if (t) {
			s.removeClass('chosen');
			t.addClass('chosen');
		}

		if (id == 'startseite') {
		} else {
		}
	}
}

/**
 * Apply special settings to the main page.
 *
 * @param id
 *            The main page id
 */
function applySpecialSettings(id) {
	// hide menu for main page
	if (id == 'startseite') {
		$("#menuleftframe", window.parent.document).addClass('hidden');
	} else {
		$("#menuleftframe", window.parent.document).removeClass('hidden');
	}

	// Set volume on music page
	if (id == 'musik') {
		$('#dreamalittledream').prop('volume', 0.3);

		width = parseInt($(this).width());

		if (width > 650) {
			$('td.audiowithlabel').contents().unwrap();
			$('div.audiolabel').wrap('<td />');
			$('div.audio').wrap('<td />');
			$('audio').css('width', width / 2);
		}

		$('#zarathustra').trigger('play');
	}
}

/*
 * Actions triggered on load of page.
 */
$(document).ready(function() {
	$('body').wrapInner('<div id="text" />')

	var myId = $('body').attr('id');
	var frame, result;

	if (top.menu != null && top.menu.document != null) {
		frame = top.menu.document;
		markChosen(frame, myId);
	}

	applySpecialSettings(myId);
});
