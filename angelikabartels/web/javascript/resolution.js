function needsMobileAdaptation() {
	return window.devicePixelRatio > 1
			&& /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
}

function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);
	var mainframe = $('#mainframe');
	var menuleftframe = $('#menuleftframe');
	var menudropdownframe = $('#menudropdownframe');
	var toplogoframe = $('#toplogoframe');
	var bottomframe = $('#bottomframe');
	var popupframe = $('#popupframe');
	var indexbody = $('#index');
	var toplogocontent = toplogoframe.contents().find('#logoimage');
	var mainimages = mainframe.contents().find('#text img');
	var bottombody = bottomframe.contents().find('body');

	// sizing of top and bottom
	var bottomheight = 50;
	if (width < height) {
		toplogocontent.attr('src', 'img/logo_schmal.jpg');
		var logoheight = width * 239 / 1257;
	} else {
		toplogocontent.attr('src', 'img/logo_breit.jpg');
		var logoheight = width * 239 / 1962;
	}
	var middleheight = height - logoheight - bottomheight;
	toplogoframe.css('height', logoheight);

	mainframe.css('top', logoheight);
	mainframe.css('height', middleheight);
	menuleftframe.css('top', logoheight);
	menuleftframe.css('height', middleheight);

	bottomframe.css('top', height - 50);

	// background positioning - image is square!

	// Correction, as width has too small values while shrinking windows vertically.

	var modWidth = width + 17;
	if (modWidth < height) {
		var offset = (modWidth - height) / 2
		var positionString = '' + offset + 'px 0px';
		var sizeString = '' + height + 'px ' + height + 'px';
	} else {
		var offset = (height - modWidth) / 2
		var positionString = '0px ' + offset + 'px';
		var sizeString = '' + modWidth + 'px ' + modWidth + 'px';
	}

	indexbody.css('background-position', positionString);
	indexbody.css('background-size', sizeString);

	// footer text sizing
	if (width < 620) {
		bottombody.addClass('smaller');
		bottombody.removeClass('small');
	} else if (width < 800) {
		bottombody.addClass('small');
		bottombody.removeClass('smaller');
	} else {
		bottombody.removeClass('small');
		bottombody.removeClass('smaller');
	}

	// hide menu on narrow screens.
	if (width < 850 || needsMobileAdaptation()) {
		menuleftframe.hide();
		bottomframe.hide();
		mainframe.css('height', height - logoheight);

		menudropdownframe.show();
		menudropdownframe.css('top', logoheight - 24 * window.devicePixelRatio);
		mainframe.css('left', 0);
		mainframe.css('width', '100%');

		// limit image size
		mainimages.css('max-width', width * 0.5);

		// impressum appears on main window
		popupframe.css('top', logoheight);
		popupframe.css('height', height - logoheight);
		popupframe.css('left', 0);
		popupframe.css('width', '100%');
		popupframe.css('border', 'none');
	} else {
		menuleftframe.show();
		bottomframe.show();
		mainframe.css('height', middleheight);

		menudropdownframe.hide();
		mainframe.css('left', '21%');
		mainframe.css('width', '79%');

		// limit image size
		mainimages.css('max-width', width * 0.4);

		// impressum appears in popupframe
		popupframe.css('top', height / 4);
		popupframe.css('height', height / 2);
		popupframe.css('left', width / 4);
		popupframe.css('width', width / 2);
		popupframe.css('border', '2px solid black');
	}
}

function adjustMainStyle() {
	adjustStyle($(window).width(), $(window).height());
}

$(window).resize(function() {
	adjustMainStyle();
});

$(document).ready(function() {
	$('#toplogoframe').on("load", function() {
		adjustMainStyle();
	});

	$('#mainframe').on("load", function() {
		adjustMainStyle();
	});

	$('#bottomframe').on("load", function() {
		adjustMainStyle();
	});

	adjustMainStyle();
});
