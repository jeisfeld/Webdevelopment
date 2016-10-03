function markMenuItem(frame, id) {
	if(frame) {
		var t = $(frame.getElementById(id));
		var s = $(frame).find('a');

		if(t) {
			s.removeClass('chosen');
			t.addClass('chosen');
		}
	}
}

function setBackground(frame, id) {
	var b = $(frame).find('body');
	if(frame) {
		b.removeClass();
		b.addClass(id);
	}
}


$(document).ready(function() {
	// Mark menu item
	var myId=$('body').attr('id');

	var menuframe = top.menu.document;
	markMenuItem(menuframe, myId);
	
	// Set background
	var maindocument = top.document;
	setBackground(maindocument, myId);
	
});

// Enable Google Analytics tracking
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

ga('create', 'UA-85063283-3', 'auto');
ga('send', 'pageview');
