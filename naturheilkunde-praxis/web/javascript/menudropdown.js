function showMenu() {
	var frame = $('#menudropdownframe', parent.document);
	frame.css('width', 220);
	frame.css('height', $('#menudropdown').hasClass('smallheight') ? 285 : 430);
	$('#menuitems').slideDown();
}

function hideMenu() {
	var frame = $('#menudropdownframe', parent.document);

	frame.css('width', 30);
	frame.css('height', 30);

	$('#menuitems').hide();
}

function toggleMenu() {
	if ($('#menuitems').is(':visible')) {
		hideMenu();
	}
	else {
		showMenu();
	}
}

function showImpressum() {
	$("#popupframe", window.parent.document).css('visibility', 'visible');
	$("#popupframe", window.parent.document).css('z-index', '20');
	var url = $("#popupframe", window.parent.document).attr('data-link');
	$("#popupframe", window.parent.document).attr('src', url);
}

function hideImpressum() {
	$("#popupframe", window.parent.document).css('visibility', 'hidden');
	$("#popupframe", window.parent.document).css('z-index', '0');
}

$(document).ready(function() {
	hideMenu();

	$('#menuitems').on('click', function() {
		hideMenu();
		hideImpressum();
	});
});
