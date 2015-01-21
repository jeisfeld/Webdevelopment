function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);

	$('.centerbox').css('width', width);
	$('.centerbox').css('height', height);
	$('.centerbox').css('margin-left', -width / 2);
	$('.centerbox').css('margin-top', -height / 2);
}

$(window).resize(function() {
	adjustStyle($(this).width(), $(this).height());
});

$(document).ready(function() {
	adjustStyle($(window).width(), $(window).height());
});
