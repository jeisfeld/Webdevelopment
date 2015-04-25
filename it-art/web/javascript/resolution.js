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
	var maintext = mainframe.contents().find('#text');
	var bottombody = bottomframe.contents().find('body');

	// sizing of top and bottom
	var bottomheight = 50;

	if (width < height || width < 940) {
		toplogocontent.attr('src', 'img/logo-it-art_narrow.png');
		toplogocontent.addClass('fullwidth');
		var logoheight = width * 200 / 940;
	} else if (width < 1400) {
		toplogocontent.attr('src', 'img/logo-it-art_narrow.png');
		toplogocontent.removeClass('fullwidth');
		var logoheight = 200;
	} else {
		toplogocontent.attr('src', 'img/logo-it-art_wide.png');
		toplogocontent.removeClass('fullwidth');
		var logoheight = 200;
	}

	// add separator
	logoheight += 1;

	var middleheight = height - logoheight - bottomheight;
	toplogoframe.css('height', logoheight);

	mainframe.css('top', logoheight);
	mainframe.css('height', middleheight);
	menuleftframe.css('top', logoheight);
	menuleftframe.css('height', middleheight);

	bottomframe.css('top', height - 50);

	// background positioning - image is square!

	if (width < height) {
		var offset = (width - height) / 2
		var positionString = '' + offset + 'px 0px';
		var sizeString = '' + height + 'px ' + height + 'px';
	} else {
		var offset = (height - width) / 2
		var positionString = '0px ' + offset + 'px';
		var sizeString = '' + width + 'px ' + width + 'px';
	}

	indexbody.css('background-position', positionString);
	indexbody.css('background-size', sizeString);

	// footer text sizing
	if (width < 620) {
		bottombody.addClass('smaller');
		bottombody.removeClass('small');
		maintext.addClass('smaller');
		maintext.removeClass('small');
	} else if (width < 850) {
		bottombody.addClass('small');
		bottombody.removeClass('smaller');
		maintext.addClass('small');
		maintext.removeClass('smaller');
	} else {
		bottombody.removeClass('small');
		bottombody.removeClass('smaller');
		maintext.removeClass('small');
		maintext.removeClass('smaller');
	}

	// hide menu on narrow screens.
	if (width < 850) {
		menuleftframe.hide();
		bottomframe.hide();
		mainframe.css('height', height - logoheight);

		menudropdownframe.show();
		menudropdownframe.css('top', logoheight - 24);
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
		if (menuleftframe.hasClass("hidden")) {
			menuleftframe.hide();
			mainframe.css('left', 0);
			mainframe.css('width', '100%');
		}
		if (!menuleftframe.hasClass("hidden")) {
			menuleftframe.show();
			mainframe.css('left', '21%');
			mainframe.css('width', '79%');
		}

		bottomframe.show();
		mainframe.css('height', middleheight);

		menudropdownframe.hide();

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
	if (!$.support.leadingWhitespace) {
		adjustForIE8();
	}
	adjustStyle($(window).width(), $(window).height());
	adjustStyle($(window).width(), $(window).height());
}

function adjustForIE8() {
	$('#index').addClass('ie8');
	$('#bottomframe').contents().find('body').addClass('ie8');
	$('#mainframe').contents().find('body').addClass('ie8');
	$('#menuleftframe').contents().find('body').addClass('ie8');
	$('#toplogoframe').contents().find('body').addClass('ie8');
	$('#popupframe').contents().find('body').addClass('ie8');
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
