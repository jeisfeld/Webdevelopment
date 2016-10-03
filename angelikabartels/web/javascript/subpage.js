/**
 * Utility method to mark the menu entry of the current page as "chosen".
 * 
 * @param frame
 * @param id
 * @returns {Boolean}
 */
function markChosen(frame, id) {
	if (frame) {
		var t = $(frame.getElementById(id));
		var s = $(frame).find('a');
		if (t) {
			s.removeClass('chosen');
			t.addClass('chosen');
		}
	}
	return (t != null && t.html().toLowerCase().match('span'));
}

$(document).ready(function() {
	var myId = $('body').attr('id');
	var frame, result;

	if (top.menu != null && top.menu.document != null) {
		frame = top.menu.document;
		markChosen(frame, myId);
	}
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

ga('create', 'UA-85063283-2', 'auto');
ga('send', 'pageview');