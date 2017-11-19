function needsMobileAdaptation() {
	return window.devicePixelRatio > 1
			&& /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
}

function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);
	var mainframe = $('#mainframe');
	var menuleftframe = $('#menuleftframe');
	var menutopframe = $('#menutopframe');
	var menudropdownframe = $('#menudropdownframe');
	var toplogoframe = $('#toplogoframe');
	var toplogocontent = toplogoframe.contents().find('#logoimage');
	var mainimages = mainframe.contents().find('#text img');
	var bottomframe = $('#bottomframe');
	var indexbody = $('#index');
	var bottombody = bottomframe.contents().find('body');
	
	var hidemenu = width < 850; 

	// sizing of top and bottom
	var bottomheight = 80;
	var menutopheight = hidemenu ? 60 : 40;
	
	if (width > 1000) {
		var logowidth = 1000;
	}
	else {
		var logowidth = width;
	}
	var logoheight = logowidth * 0.1;
	
	var middleheight = height - logoheight - menutopheight - bottomheight;

	toplogoframe.css('height', logoheight);
	toplogoframe.css('width', logowidth);
	toplogoframe.css('left', (width - logowidth)/2);

	menutopframe.css('top', logoheight);
	menutopframe.css('height', menutopheight);

	mainframe.css('top', logoheight + menutopheight);
	mainframe.css('height', middleheight);

	menuleftframe.css('top', logoheight + menutopheight);
	menuleftframe.css('height', middleheight);

	bottomframe.css('top', height - bottomheight);

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
	} else if (width < 800) {
		bottombody.addClass('small');
		bottombody.removeClass('smaller');
	} else {
		bottombody.removeClass('small');
		bottombody.removeClass('smaller');
	}

	// hide menu on narrow screens.
	if (hidemenu) {
		menuleftframe.hide();
		bottomframe.hide();
		mainframe.css('height', middleheight + bottomheight);

		menudropdownframe.show();
		menudropdownframe.css('top', logoheight - 24);
		mainframe.css('left', 0);
		mainframe.css('width', '100%');

		toplogocontent.css('margin-left', '8%');
		menutopframe.css('left', '0%');
		menutopframe.css('width', '100%');
		
		// limit image size
		mainimages.css('max-width', width * 0.5);

	} else {
		menuleftframe.show();
		bottomframe.show();
		mainframe.css('height', middleheight);

		menudropdownframe.hide();
		mainframe.css('left', '21%');
		mainframe.css('width', '79%');

		toplogocontent.css('margin-left', '5%');
		menutopframe.css('left', '21%');
		menutopframe.css('width', '79%');

		// limit image size
		mainimages.css('max-width', width * 0.4);
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
