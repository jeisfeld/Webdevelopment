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
