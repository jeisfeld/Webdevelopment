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
	// for top menu
	if (width < 650) {
		$('.menutop div.part').css('display', 'block');
	} else {
		$('.menutop div.part').css('display', 'inline');
	}
}


$(window).resize(function() {
	adjustStyle($(this).width(), $(this).height());
});

$(document).ready(function() {

	adjustStyle($(this).width(), $(this).height());

	var menu = $('.menu'), a = menu.find('a');

	// include the text in <span /> element.
	a.wrapInner($('<span />'));

	a.hover(function() {
		var t = $(this), s = t.siblings('a');
		t.find('span').toggleClass('highlight');
		s.find('span').toggleClass('blur');
	});


});
