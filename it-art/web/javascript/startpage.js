function position(totalwidth, totalheight, object, horizontal, vertical, delay) {

	var targetWidth = 300;
	var targetHeight = 80;
	var targetFontSize = 32;
	if ($('#text').hasClass('small')) {
		targetWidth = 270;
		targetHeight = 70;
		targetFontSize = 28;
	} else if ($('#text').hasClass('smaller')) {
		targetWidth = 240;
		targetHeight = 60;
		targetFontSize = 26;
	}

	object.offset({
		top : totalheight * (vertical + 0.5 * (Math.random() - 0.5)),
		left : totalwidth * (horizontal + 0.5 * (Math.random() - 0.5))
	});
	var targetTop = (totalheight - targetHeight) * vertical;
	var targetLeft = (totalwidth - targetWidth) * horizontal;

	object.delay(delay).animate({
		width : targetWidth,
		height : targetHeight,
		lineHeight : targetHeight,
		fontSize : targetFontSize,
		left : targetLeft,
		top : targetTop
	}, "slow");
}

function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);

	var maintext = $('#text');
	if (width < 620) {
		maintext.addClass('smaller');
		maintext.removeClass('small');
	} else if (width < 850) {
		maintext.addClass('small');
		maintext.removeClass('smaller');
	} else {
		maintext.removeClass('small');
		maintext.removeClass('smaller');
	}

	if (height > 500) {
		position(width, height, $('#webseiten'), 0.35, 0.2);
		position(width, height, $('#grafik'), 0.45, 0.4, 200);
		position(width, height, $('#musik'), 0.55, 0.6, 400);
		position(width, height, $('#apps'), 0.65, 0.8, 600);
	} else if (height > 400) {
		position(width, height, $('#webseiten'), 0.35, 0.05);
		position(width, height, $('#grafik'), 0.45, 0.35, 200);
		position(width, height, $('#musik'), 0.55, 0.65, 400);
		position(width, height, $('#apps'), 0.65, 0.95, 600);
	} else {
		position(width, height, $('#webseiten'), 0.2, 0.05);
		position(width, height, $('#grafik'), 0.8, 0.35, 200);
		position(width, height, $('#musik'), 0.2, 0.65, 400);
		position(width, height, $('#apps'), 0.8, 0.95, 600);
	}

}

$(window).resize(function() {
	adjustStyle($(this).width(), $(this).height());
});

$(document).ready(function() {
	$("#mainframe", window.parent.document).css('width', '100%');

	$('#startseite').find('h1').each(function(i) {
		var id = $(this).attr('id');
		$(this).wrapInner($('<a href="' + id + '.html" />'));
		$(this).addClass('startitem');
	});

	adjustStyle($(window).width(), Math.min($(window).height(), screen.height));
});
