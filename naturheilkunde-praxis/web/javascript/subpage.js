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
	var isKontakt = $('body').attr('id') === 'kontakt' ? true : false;

	if (width < 1000) {
		$('#pictimg2').css('max-width', Math.round(width * 0.4));
		$('#pictimg').css('max-width', '');
		$('#pictimg').hide();
		$('#pictimg2').show();
		$('#text').addClass('fullwidth');
	}
	else {
		$('#pictimg').css('max-width', Math.round(width / 3));
		$('#pictimg').css('max-height', height - 100);
		$('#pictimg2').css('max-width', '');
		$('#pictimg2').hide();
		$('#pictimg').show();
		$('#text').removeClass('fullwidth');
	}

	if ($('#mainframe', window.parent.document).hasClass('mobile')) {
		$('#startseite').removeClass('desktop');
		$('#endmenu').show();
	}
	else {
		$('#startseite').addClass('desktop');
		$('#endmenu').hide();
	}

	if (isKontakt) {
		var mwidth = Math.min(600, Math.round(width / 2));
		var mheight = Math.min(600, Math.max(200, height - 130));
		$('#pict.googlemaps div, #pict.googlemaps div img').css('width', mwidth);
		$('#pict.googlemaps div, #pict.googlemaps div img').css('height', mheight);
	}

	if (width < 500) {
		$('#text, #pict').addClass('small');
	}
	else {
		$('#text, #pict').removeClass('small');
	}
}

function showImpressum() {
	$("#popupframe", window.parent.document).css('visibility', 'visible');
	$("#popupframe", window.parent.document).css('z-index', '20');
	var url = $("#popupframe", window.parent.document).attr('data-link');
	$("#popupframe", window.parent.document).attr('src', url);
}

$(window).resize(
		function() {
			if ($("#allcontent", window.parent.document).size() > 0) {
				return;
			}

			adjustStyleSubpage($("#mainframe", window.parent.document).width(), $("#mainframe", window.parent.document)
					.height());
		});

$(document).ready(
		function() {
			var myId = $('body').attr('id');

			markChosen(top.menutop.document, myId);
			markChosen(top.menu.document, myId);

			var pict2 = $('#pict:not(.googlemaps)').contents().clone();
			var pictimg2 = pict2.is('#pictimg') ? pict2 : pict2.find('#pictimg');
			pictimg2.attr('id', 'pictimg2');
			pictimg2.addClass('pictimgfloat');

			$('#text h2').after(pict2);
			$('#pictimg2').hide();

			$('#subpage').after('<div id="endmenu"></div>');
			$('#endmenu').load('../navigation/menu_dropdown.html #menuitems', function() {
				$('#endmenu').prepend('<hr><h3>Inhalt</h3>');
			});

			adjustStyleSubpage($("#mainframe", window.parent.document).width(), $("#mainframe", window.parent.document)
					.height());
		});

// Google Analytics tracking
var gaProperty = 'UA-85063283-1';
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

ga('create', 'UA-85063283-1', 'auto');
ga('set', 'anonymizeIp', true);
ga('send', 'pageview');
