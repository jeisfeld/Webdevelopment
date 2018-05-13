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

	$('img').bind('contextmenu', function() {
		$title = $(this).attr('title');
		if ($title) {
			alert($title);
		}
		return false;
	})
});

// Google Analytics tracking
var gaProperty = 'UA-85063283-2';
var disableStr = 'ga-disable-' + gaProperty;
if (document.cookie.indexOf(disableStr + '=true') > -1) {
	window[disableStr] = true;
}
function gaOptout() {
	document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
	window[disableStr] = true;
	alert('Das Tracking ist jetzt deaktiviert');
}
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
ga('set', 'anonymizeIp', true);
ga('send', 'pageview');
