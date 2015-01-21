function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);

	// for left menu
	if (height < 330) {
		$('#menuleft').addClass('smallheight');
	} else {
		$('#menuleft').removeClass('smallheight');
	}
	if (width < 230) {
		$('#menuleft').addClass('smallwidth');
	} else {
		$('#menuleft').removeClass('smallwidth');
	}
	if (height < 230 || width < 200) {
		$('#menuleft a').addClass('smalltext');
	} else {
		$('#menuleft a').removeClass('smalltext');
	}

	$('#menuleft a').css('width', '' + width + 'px');
}

$(window).resize(function() {
	adjustStyle($(this).width(), $(this).height());
});

$(document).ready(function() {

	var menu = $('#menuleft'), a = menu.find('a');

	// include the text in <span /> element.
	a.wrapInner($('<span />'));

	a.hover(function() {
		var t = $(this), s = t.siblings('a');
		t.toggleClass('highlight');
		s.toggleClass('blur');
	});

	adjustStyle($(window).width(), $(window).height());

});
