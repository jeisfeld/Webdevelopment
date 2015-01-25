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

	if (needsMobileAdaptation()) {
		menudropdownframe.css('top', logoheight - 24 * window.devicePixelRatio);
	} else {
		menudropdownframe.css('top', logoheight);
	}

	popupframe.css('top', height / 4);
	popupframe.css('height', height / 2);
	popupframe.css('left', width / 4);
	popupframe.css('width', width / 2);

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

	// image width limitation
	mainimages.css('max-width', width * 0.4);

	// hide menu on narrow screens.
	if (width < 850 || needsMobileAdaptation()) {
		menuleftframe.hide();
		menudropdownframe.show();
		mainframe.css('left', 0);
		mainframe.css('width', '100%');
	} else {
		menuleftframe.show();
		menudropdownframe.hide();
		mainframe.css('left', '21%');
		mainframe.css('width', '79%');
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
