function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);

	// for left menu
	if (height < 330) {
		$('#menuleft').addClass('smallheight');
	} else {
		$('#menuleft').removeClass('smallheight');
	}
	if (width < 130) {
		$('#menuleft').addClass('smallwidth');
	} else {
		$('#menuleft').removeClass('smallwidth');
	}
	
	if(width < 100) {
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
	} else {
		$('#menutop').removeClass('tworow');
	}
	if (width < 350) {
		$('#menutop').addClass('smalltext');
	} else {
		$('#menutop').removeClass('smalltext');
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
		t.find('span').toggleClass('highlight');
		s.find('span').toggleClass('blur');
	});

	adjustStyle($(window).width(), $(window).height());

});
