function openPopup(url) {
	var newwindow = window.open(url, '_blank', 'height=600,width=800,scrollbars=yes');
	if (window.focus) {
		newwindow.focus()
	}
}

function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);

	// for left menu
	if (height < 330) {
		$('#menuleft').addClass('smallheight');
	} else {
		$('#menuleft').removeClass('smallheight');
	}
	if (width < 240) {
		$('#menuleft').addClass('smallwidth');
	} else {
		$('#menuleft').removeClass('smallwidth');
	}
	if (height < 230 || width < 210) {
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

	// Suppress print button on mobile browsers
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		$("#linkprint").remove();
	}

});
