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

$(document).ready(function() {
	var myId = $('body').attr('id');
	var frame, result;


	if(top.menu != null && top.menu.document != null) {
		frame = top.menu.document;
		markChosen(frame, myId);
	}
});
