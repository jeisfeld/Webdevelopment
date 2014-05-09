function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);
	var innerhframe = $('#innerhframe');
	var outerhframe = $('#outerhframe');
	var outervframe = $('#outervframe');
	var toplogoframe = $(top.toplogoframe.document);
	var bottomonlineframe = $(top.bottomonlineframe.document);

	// sizing of top and bottom
	if (width < 1100 || height < 700) {
		var logoheight = Math.min(width / 11, Math.min(width / 20, 60) + height
				/ 20);
		var logomargin = Math.min(width / 50, height / 50);
		outervframe.attr('rows', logoheight + ',*,55');
		toplogoframe.find('body').css('margin-left', '5px');
		toplogoframe.find('body').css('margin-top', '' + logomargin);
		bottomonlineframe.find('*').addClass('small');
	} else {
		outervframe.attr('rows', '120,*,95');
		toplogoframe.find('body').css('margin-left', '30px');
		toplogoframe.find('body').css('margin-top', '30px');
		bottomonlineframe.find('*').removeClass('small');
	}

	if (width < 1100) {
		toplogoframe.find('img').css('width', '100%');
	} else {
		toplogoframe.find('img').css('width', '844');
	}

	// horizontal sizing
	if (width > 1200) {
		outerhframe.attr('cols', '15%,73%,12%');
		innerhframe.attr('cols', '18%,82%');
	} else {
		if (width > 600) {
			innerhframe.attr('cols', '125,*');
			outerhframe.attr('cols', '15%,80%,5%');
		} else {
			innerhframe.attr('cols', '100,*');
			outerhframe.attr('cols', '10%,90%,0');
		}
	}
}

function adjustMainStyle() {
	adjustStyle($(this).width(), $(this).height());
}

$(window).resize(function() {
	adjustMainStyle();
});

$(document).ready(function() {
	adjustMainStyle();
});
