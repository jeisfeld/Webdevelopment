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

$(document).ready(function() {
	adjustStyle($(document).width(), $(document).height());
});
