function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);
	var mainframe = $('#mainframe');
	var menuleftframe = $('#menuleftframe');
	var menudropdownframe = $('#menudropdownframe');
	var toplogoframe = $('#toplogoframe');
	var popupframe = $('#popupframe');
	var logoimage = $('#logoimage');

	if (width < 950) {
		logoimage.attr('src', 'img/logo-it-art_narrow.png');
		var logoheight = width * 200 / 940;
	}
	else if (width < 1400) {
		logoimage.attr('src', 'img/logo-it-art_narrow.png');
		var logoheight = 200;
	}
	else {
		logoimage.attr('src', 'img/logo-it-art_wide.png');
		var logoheight = 200;
	}

	// add separator
	logoheight += 1;

	toplogoframe.css('height', logoheight);

	mainframe.css('top', logoheight);
	menuleftframe.css('top', logoheight);


	// hide menu on narrow screens.
	if (width < 620) {
		menuleftframe.hide();

		menudropdownframe.show();
		menudropdownframe.css('top', logoheight - 24);
		mainframe.css('left', 0);
		mainframe.css('width', '100%');

		// impressum appears on main window
		popupframe.css('top', logoheight);
		popupframe.css('height', height - logoheight);
		popupframe.css('left', 0);
		popupframe.css('width', '100%');
		popupframe.css('border', 'none');
	} else {
		if ($("#mainframe.startseite").length) {
			menuleftframe.hide();
			mainframe.css('left', 0);
			mainframe.css('width', '100%');
		}
		else {
			menuleftframe.show();
			mainframe.css('left', '21%');
			mainframe.css('width', '79%');
		}

		menudropdownframe.hide();

		// impressum appears in popupframe
		popupframe.css('top', height / 4);
		popupframe.css('height', height / 2);
		popupframe.css('left', '25%');
		popupframe.css('width', '50%');
		popupframe.css('border', '2px solid black');
	}

}

$(window).resize(function() {
	adjustStyle($(window).width(), $(window).height());
});

$(document).ready(function() {
	adjustStyle($(window).width(), $(window).height());
});
