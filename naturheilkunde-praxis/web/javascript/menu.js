function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);

	// for left menu
	if (height < 330) {
		$('#menuleft').addClass('smallheight');
	}
	else {
		$('#menuleft').removeClass('smallheight');
	}
	if (width < 130) {
		$('#menuleft').addClass('smallwidth');
	}
	else {
		$('#menuleft').removeClass('smallwidth');
	}

	if (width < 100) {
		$('#menuleft a').addClass('smallesttext');
		$('#menuleft a').removeClass('smalltext');
	}
	else if (height < 230 || width < 110) {
		$('#menuleft a').addClass('smalltext');
		$('#menuleft a').removeClass('smallesttext');
	}
	else {
		$('#menuleft a').removeClass('smalltext');
		$('#menuleft a').removeClass('smallesttext');
	}

	$('#menuleft a').css('width', '' + width + 'px');

	// for top menu
	if (width < 650) {
		$('#menutop').addClass('tworow');
		$('#menutop a').css('height', '');
	}
	else {
		$('#menutop').removeClass('tworow');
		$('#menutop a').css('height', '' + height + 'px');
	}
	if (width < 350) {
		$('#menutop').addClass('smalltext');
		$('#menutop').removeClass('midtext');
	}
	else if (width < 800) {
		$('#menutop').addClass('midtext');
		$('#menutop').removeClass('smalltext');
	}
	else {
		$('#menutop').removeClass('smalltext');
		$('#menutop').removeClass('midtext');
	}

}

$(window).resize(function() {
	adjustStyle($(this).width(), $(this).height());
});

$(document).ready(function() {

	var menu = $('.menu'), a = menu.find('a');

	// include the text in <span /> element.
	a.wrapInner($('<span />'));

	a.hover(function() {
		var t = $(this), s = t.siblings('a');
		t.toggleClass('highlight');
		s.toggleClass('blur');
	});

	adjustStyle($(window).width(), $(window).height());

});
