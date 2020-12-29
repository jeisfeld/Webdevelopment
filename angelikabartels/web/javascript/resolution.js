function showMenu() {
	var frame = $('#menuframe');
	if (frame.hasClass("dropdown")) {
		frame.css('width', 335);
		frame.css('height', 365);
		$('#menuframe #menuitems').slideDown();
	}
	else {
		frame.css('width', '');
		frame.css('height', '');
		$('#menuframe #menuitems').show();
	}

}

function hideMenu() {
	var frame = $('#menuframe.dropdown');

	frame.css('width', 30);
	frame.css('height', 30);

	$('#menuframe.dropdown #menuitems').hide();
}

function toggleMenu() {
	if ($('#menuframe.dropdown #menuitems').is(':visible')) {
		hideMenu();
	} else {
		showMenu();
	}
}

function showImpressum() {
	hideMenu();
	$("#popupframe").css('visibility', 'visible');
	$("#popupframe").css('z-index', '20');
}

function closeImpressum() {
	$("#popupframe").css('visibility', 'hidden');
	$("#popupframe").css('z-index', '0');
}

function openPopup(url) {
	var newwindow = window.open(url, '_blank', 'height=600,width=800,scrollbars=yes,menubar=yes');
	if (window.focus) {
		newwindow.focus()
	}
}

function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);
	var toplogoframe = $('#toplogoframe');
	var popupframe = $('#popupframe');
	var body = $('body');
	var logoimage = $('#toplogoframe #logoimage');
	var mainimages = $('#mainframe #text img');
	var oldlogosrc = logoimage.attr('src');

	// sizing of top and bottom
	if (width < height * 0.8) {
		logoimage.attr('src', oldlogosrc.replace('_breit', '_schmal'));
		var logoheight = width * 239 / 1257;
	} else {
		logoimage.attr('src', oldlogosrc.replace('_schmal', '_breit'));
		var logoheight = width * 239 / 1962;
	}
	toplogoframe.css('height', logoheight);

	$('#mainframe').css('top', logoheight);
	$('#menuframe').css('top', logoheight);

	// background positioning - image is square!

	if (width < height) {
		var offset = (width - height) / 2
		var positionString = '' + offset + 'px 0px';
		var sizeString = '' + height + 'px ' + height + 'px';
	}
	else {
		var offset = (height - width) / 2
		var positionString = '0px ' + offset + 'px';
		var sizeString = '' + width + 'px ' + width + 'px';
	}

	body.css('background-position', positionString);
	body.css('background-size', sizeString);

	// hide menu on narrow screens.
	if (width < 850 || height < 500) {
		$('#menuframe').css('top', logoheight - 24);
		$('#menuframe').addClass("dropdown");
		hideMenu();

		// limit image size
		mainimages.css('max-width', width * 0.5);

		// impressum appears on main window
		popupframe.css('top', logoheight);
	}
	else {
		$('#menuframe').css('top', logoheight);
		$('#menuframe').removeClass("dropdown");
		showMenu();

		// limit image size
		mainimages.css('max-width', width * 0.4);

		// impressum appears in popupframe
		popupframe.css('top', '');
	}

	$('.startseite .centerbox').css('width', $("#mainframe").width() - 10);
	$('.startseite .centerbox').css('height', $("#mainframe").height() - 10);
}

function adjustMainStyle() {
	adjustStyle($(window).width(), $(window).height());
}

$(window).resize(function() {
	adjustMainStyle();
});

$(document).ready(function() {
	$('#menuframe.dropdown #menuitems').on('click', function() {
		hideMenu();
		closeImpressum();
	});

	adjustMainStyle();
});
