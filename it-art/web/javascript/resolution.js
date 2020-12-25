function showMenu() {
	var frame = $('#menuframe');
	if (frame.hasClass("dropdown")) {
		frame.css('width', 305);
		frame.css('height', 305);
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

function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);
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

	$('#mainframe').css('top', logoheight);


	// hide menu on narrow screens.
	if (width < 620) {
		$('#menuframe').css('top', logoheight - 24);
		$('#menuframe').addClass("dropdown");
		hideMenu();
		// impressum appears on main window
		popupframe.css('top', logoheight);
	}
	else {
		$('#menuframe').css('top', logoheight);
		$('#menuframe').removeClass("dropdown");
		showMenu();
		// impressum appears in popupframe
		popupframe.css('top', '');
	}

}

$(window).resize(function() {
	adjustStyle($(window).width(), $(window).height());
});

$(document).ready(function() {
	$('#menuframe.dropdown #menuitems').on('click', function() {
		hideMenu();
		closeImpressum();
	});

	adjustStyle($(window).width(), $(window).height());
	hideMenu();
});
