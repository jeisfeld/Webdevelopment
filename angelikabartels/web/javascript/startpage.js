function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);

	$('.centerbox').css('width', width-10);
	$('.centerbox').css('height', height-10);
}

$(window).resize(
		function() {
			adjustStyle($("#mainframe", window.parent.document).width(), $(
					"#mainframe", window.parent.document).height());
		});

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

	adjustStyle($(document).width(), $(document).height());
});
