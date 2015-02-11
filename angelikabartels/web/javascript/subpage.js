/**
 * Utility method to mark the menu entry of the current page as "chosen".
 *
 * @param frame
 * @param id
 * @returns {Boolean}
 */
function markChosen(frame, id) {
	if (frame) {
		var t = $(frame.getElementById(id));
		var s = $(frame).find('a');
		if (t) {
			s.removeClass('chosen');
			t.addClass('chosen');
		}
	}
	return (t != null && t.html().toLowerCase().match('span'));
}

/**
 * Change some sizes in order to fit better on mobile devices.
 */
function adaptToHighResolution(width) {
	width = parseInt(width);

	if (window.devicePixelRatio > 1 && width < 800) {
		$('h1').css('font-size', '24px');
		$('body, p').css('font-size', '14px');
	}
}

$(document).ready(function() {
	adaptToHighResolution($(document).width());

	var myId = $('body').attr('id');
	var frame, result;


	if(top.menu != null && top.menu.document != null) {
		frame = top.menu.document;
		markChosen(frame, myId);
	}
});
