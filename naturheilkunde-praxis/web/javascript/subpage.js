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
	return (t != null && t.html() != null && t.html().toLowerCase().match('span'));
}

function adjustStyleSubpage(width, height) {
	if (width < 1000) {
		$('#pictimg2').css('max-width', Math.round(width / 3));
		$('#pictimg').hide();
		$('#pictimg2').show();
		$('#text').addClass('fullwidth');
	}
	else {
		$('#pictimg2').css('max-width', '');
		$('#pictimg2').hide();
		$('#pictimg').show();
		$('#text').removeClass('fullwidth');
	}

	$('#pict iframe').css('max-width', Math.round(width / 2));
	$('#pict iframe').css('max-height', Math.max(200, height - 150));

	if (width < 500) {
		$('#text, #pict').addClass('small');
	}
	else {
		$('#text, #pict').removeClass('small');
	}
}

$(window).resize(function() {
	adjustStyleSubpage($(this).width(), $(this).height());
});

$(document).ready(function() {
	var myId = $('body').attr('id');

	markChosen(top.menutop.document, myId);
	markChosen(top.menu.document, myId);

	var pictimg2 = $('#pictimg').clone();
	pictimg2.attr('id', 'pictimg2');
	pictimg2.css('float', 'right');
	pictimg2.css('margin-left', '5px');
	pictimg2.css('margin-bottom', '5px');

	if ($('#text h2 + h3').size() > 0) {
		$('#text h2 + h3').after(pictimg2);
	}
	else {
		$('#text h2').after(pictimg2);
	}
	$('#pictimg2').hide();

	adjustStyleSubpage($(window).width(), $(window).height());
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