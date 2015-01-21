function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);
	var mainframe = $('#mainframe');
	var menuleftframe = $('#menuleftframe');
	var toplogoframe = $('#toplogoframe');
	var bottomframe = $('#bottomframe');
	var popupframe = $('#popupframe');
	var toplogocontent = toplogoframe.contents().find('#logoimage');

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

	popupframe.css('top', height/4);
	popupframe.css('height', height/2);
	popupframe.css('left', width/4);
	popupframe.css('width', width/2);
}

function adjustMainStyle() {
	adjustStyle($(this).width(), $(this).height());
}

$(window).resize(function() {
	adjustMainStyle();
});

$(document).ready(function() {
	$('#toplogoframe').on("load", function() {
		adjustMainStyle();
	});

	adjustMainStyle();
});
