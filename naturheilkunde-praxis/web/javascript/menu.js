function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);

	// for left menu
	if (height < 330) {
		$('.menuleft hr').css('height', '4px');
		$('.menuleft a').css('margin-bottom', '0px');
	} else {
		$('.menuleft hr').css('height', '36px');
		$('.menuleft a').css('margin-bottom', '5px');
	}
	if (width < 130) {
		$('.menuleft').css('left', '5px');
		$('.menuleft a span').css('left', '5px');
	} else {
		$('.menuleft').css('left', '10%');
		$('.menuleft a span').css('left', '12px');
	}
	if (height < 230 || width < 110) {
		$('.menuleft a').css('font-size', '14px');
		$('.menuleft a').css('height', '25px');
	} else {
		$('.menuleft a').css('font-size', '18px');
		$('.menuleft a').css('height', '29px');
	}
	$('.menuleft a').css('width', '' + width + 'px');

	// for top menu
	if (width < 650) {
		$('.menutop div.part').css('display', 'block');
	} else {
		$('.menutop div.part').css('display', 'inline');
	}
	if (width < 350) {
		$('.menutop a').css('font-size', '12px');
		$('.menutop a').css('margin-right', '15px');
		$('.menutop').css('margin-left', '5px');
	} else {
		$('.menutop a').css('font-size', '15px');
		$('.menutop a').css('margin-right', '30px');
		$('.menutop').css('margin-left', '15px');
	}
}

$(window).resize(function() {
	adjustStyle($(this).width(), $(this).height());
});

$(document).ready(function() {

	adjustStyle($(window).width(), $(window).height());

	var menu = $('.menu'), a = menu.find('a');

	// include the text in <span /> element.
	a.wrapInner($('<span />'));

	a.hover(function() {
		var t = $(this), s = t.siblings('a');
		t.find('span').toggleClass('highlight');
		s.find('span').toggleClass('blur');
	});

});
