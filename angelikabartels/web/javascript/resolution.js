function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);
	var mainframe = $('#mainframe');
	var menuleftframe = $('#menuleftframe');
	var toplogoframe = $('#toplogoframe');
	var bottomframe = $('#bottomframe');
	var popupframe = $('#popupframe');
	var indexbody = $('#index');
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

	popupframe.css('top', height / 4);
	popupframe.css('height', height / 2);
	popupframe.css('left', width / 4);
	popupframe.css('width', width / 2);

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

	adjustMainStyle();
});
