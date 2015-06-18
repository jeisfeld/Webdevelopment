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

	if (id == 'musik') {
		// Set volume on music page
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

function adjustSize(id, width, height) {
	width = parseInt(width);
	height = parseInt(height);

	// Set size of contact form
	if (id == 'kontakt') {
		width = parseInt($(this).width());
		$('form').css('width', width - 80);
		$('input.inputtext').css('width', width - 100);
		$('textarea').css('width', width - 100);
	}

	if (id == 'musik') {
		var clefheight = Math.min(height, $(window).height()) - 20;
		var clefwidth = clefheight * 599 / 854;
		$('div.centered img').height(clefheight);
		$('div.centered img').width(clefwidth);
		$('div.centered img').css('max-width', clefwidth);
		$('div.centered img').css('min-width', clefwidth);
		$('div.centered').css('left', (width - clefwidth) / 2);
	}
}

/*
 * Actions triggered on resize
 */
$(window).resize(function() {
	var myId = $('body').attr('id');
	adjustSize(myId, $(this).width(), $(this).height());
});

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
	adjustSize(myId, $(this).width(), $(this).height());
});
