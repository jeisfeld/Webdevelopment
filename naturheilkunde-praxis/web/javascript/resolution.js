function showMenu() {
	var frame = $('#menuframe');
	if (frame.hasClass("dropdown")) {
		$('#menuframe').slideDown();
	}
	else {
		$('#menuframe').show();
	}

}

function hideMenu() {
	$('#menuframe.dropdown').hide();
}

function toggleMenu() {
	if ($('#menuframe.dropdown').is(':visible')) {
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
	var logoimage = $('#logoimage');
	var popupframe = $('#popupframe');
	var body = $('body');

	var hidemenu = width < 850;

	// sizing of top and bottom
	var menutopheight = hidemenu ? 0 : 40;
	var logowidth = width > 1000 ? 1000 : width;

	var oldlogosrc = logoimage.attr('src');

	if (width > height) {
		logoimage.attr('src', oldlogosrc.replace('_narrow', '_wide'));
		var logoheight = logowidth * 0.1;
	}
	else {
		logoimage.attr('src', oldlogosrc.replace('_wide', '_narrow'));
		var logoheight = logowidth * 0.13;
	}

	toplogoframe.css('height', logoheight);
	toplogoframe.css('width', logowidth);
	if (width > 1300 && !hidemenu) {
		toplogoframe.css('left', '21%');
	}
	else {
		toplogoframe.css('left', (width - logowidth) / 2);
	}

	$('#menutopframe').css('top', logoheight);
	$('#menutopframe').css('height', menutopheight - 10);

	$('#mainframe').css('top', logoheight + menutopheight);
	$('#menuframe').css('top', logoheight + menutopheight);


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
	if (hidemenu) {
		$('#menuframe').addClass("dropdown");
		$('#menutopframe').hide();
		hideMenu();

		// impressum appears on main window
		popupframe.css('top', logoheight);
	}
	else {
		$('#menuframe').removeClass("dropdown");
		$('#menutopframe').show();
		showMenu();

		// impressum appears in popupframe
		popupframe.css('top', '');
	}
	
	// Sizing of Google maps
	var mwidth = Math.min(600, Math.round($('#mainframe').width() / 2));
	var mheight = Math.min(600, Math.max(200, $('#mainframe').height() - 130));
	$('#pict2.googlemaps div, #pict2.googlemaps div img').css('width', mwidth);
	$('#pict2.googlemaps div, #pict2.googlemaps div img').css('height', mheight);
	
}

function adjustMainStyle() {
	adjustStyle($(window).width(), $(window).height());
}

$(window).resize(function() {
	adjustMainStyle();
});

$(document).ready(function() {
	var pict2 = $('#pict').contents().clone();
	var pictimg2 = pict2.is('#pictimg') ? pict2 : pict2.find('#pictimg');
	pictimg2.attr('id', 'pictimg2');
	pictimg2.addClass('pictimgfloat');

	$('#text h2').after(pict2);
	$('#endmenu a.top').wrap('<li class="subitem"></li>');
	$('#endmenu a.left').wrap('<li></li>');

	adjustMainStyle();
});
