function markChosen(frame, id) {
	if (frame) {
		var t = $(frame.getElementById(id));
		var s = $(frame).find('a');
		// alert(t.html());
		if (t) {
			s.removeClass('chosen');
			t.addClass('chosen');
		}
	}
	return (t != null && t.html().toLowerCase().match('span'));
}

function adjustStyle(width, height) {
	if (width < 500) {
		$('#text, #pict').addClass('small');
		$('#pict img').css('max-width', Math.round(width / 3));
	} else {
		$('#text, #pict').removeClass('small');
		$('#pict img').css('max-width', '');
	}
}

$(window).resize(function() {
	adjustStyle($(this).width(), $(this).height());
});

$(document).ready(function() {
	var myId = $('body').attr('id');
	var frame, result;

	// first try in top frame
	try {
		frame = top.main.menutop.document;
		result = markChosen(frame, myId);
	} catch (e) {
	}

	// otherwise, try in left frame
	if (!result) {
		frame = top.menu.document;
		markChosen(frame, myId);
	}

	adjustStyle($(window).width(), $(window).height());
});

// Google Analytics tracking
(function(i, s, o, g, r, a, m) {
	i['GoogleAnalyticsObject'] = r;
	i[r] = i[r] || function() {
		(i[r].q = i[r].q || []).push(arguments)
	}, i[r].l = 1 * new Date();
	a = s.createElement(o), m = s.getElementsByTagName(o)[0];
	a.async = 1;
	a.src = g;
	m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-85063283-1', 'auto');
ga('send', 'pageview');