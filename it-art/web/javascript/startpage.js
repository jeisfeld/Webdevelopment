function position(totalwidth, totalheight, object, horizontal, vertical) {
	object.offset({
		top : (totalheight - object.height()) * vertical,
		left : (totalwidth - object.width()) * horizontal
	});
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

	if(height > 500) {
		position(width, height, $('#webseiten'), 0.35, 0.2);
		position(width, height, $('#grafik'), 0.45, 0.4);
		position(width, height, $('#musik'), 0.55, 0.6);
		position(width, height, $('#apps'), 0.65, 0.8);
	}
	else if(height > 400) {
		position(width, height, $('#webseiten'), 0.35, 0.05);
		position(width, height, $('#grafik'), 0.45, 0.35);
		position(width, height, $('#musik'), 0.55, 0.65);
		position(width, height, $('#apps'), 0.65, 0.95);
	}
	else {
		position(width, height, $('#webseiten'), 0.2, 0.05);
		position(width, height, $('#grafik'), 0.8, 0.35);
		position(width, height, $('#musik'), 0.2, 0.65);
		position(width, height, $('#apps'), 0.8, 0.95);
	}

}

$(window).resize(function() {
	adjustStyle($(this).width(), $(this).height());
});

$(document).ready(function() {
	$('#startseite').find('h1').each(function(i) {
		var id = $(this).attr('id');
		$(this).wrapInner($('<a href="' + id + '.html" />'));
		$(this).addClass('startitem');
	});

	adjustStyle($(window).width(), $(window).height());
});
