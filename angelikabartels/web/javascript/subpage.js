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
		// alert(t.html());
		if (t) {
			s.removeClass('chosen');
			t.addClass('chosen');
		}
	}
	return (t != null && t.html().toLowerCase().match('span'));
}

/**
 * Utility method that multiplies CSS px values by the device resolution factor (for smartphones).
 */
function multiplyCss(pattern, parameter, factor) {
	var oldValue = $(pattern).css(parameter);
	if (oldValue.indexOf('px') > 0) {
		oldValue = oldValue.substr(0, oldValue.indexOf('px'));
	}
	var newValue = '' + parseInt(oldValue) * factor + 'px';
	$(pattern).css(parameter, newValue);
}

/**
 * Increaze some sizes in order to fit better on mobile devices.
 */
function adaptToHighResolution() {
	if (window.devicePixelRatio > 1
			&& /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		zoomFactor = window.devicePixelRatio;
		multiplyCss('body, p', 'font-size', zoomFactor * 0.9);
		multiplyCss('h1', 'font-size', zoomFactor * 0.7);
		multiplyCss('#text h1', 'margin-bottom', zoomFactor);
		multiplyCss('#text p:not(.supertitle), #text ul', 'margin-bottom', zoomFactor);
		multiplyCss('#text p:not(.supertitle), #text ul', 'padding-bottom', zoomFactor);
		multiplyCss('#text hr', 'margin-bottom', zoomFactor);
		// Take explicit value, as p font size was already changed
		$('#text p.footer').css('font-size', '' + (7.5 * zoomFactor) + 'px');
	}
}

$(document).ready(function() {
	adaptToHighResolution();

	var myId = $('body').attr('id');
	var frame, result;

	// first try in top frame
	try {
		frame = top.main.menutop.document;
		result = markChosen(frame, myId);
	} catch (e) {
	}

	// otherwise, try in left frame
	if (!result) {
		frame = top.menu.document;
		markChosen(frame, myId);
	}

});
