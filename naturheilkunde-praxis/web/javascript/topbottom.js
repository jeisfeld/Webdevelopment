function adjustStyle(width, height) {
	if (width < 500) {
		$('#address .hideable').hide();
	}
	else {
		$('#address .hideable').show();
	}

	if (width < 400) {
		$('tr.address').addClass('small');
	}
	else {
		$('tr.address').removeClass('small');
	}

}

$(window).resize(function() {
	adjustStyle($(this).width(), $(this).height());
});

$(document).ready(function() {
	top.adjustMainStyle();
	adjustStyle($(window).width(), $(window).height());
});
