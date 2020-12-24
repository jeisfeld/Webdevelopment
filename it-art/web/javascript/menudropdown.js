var zoomFactor = 1;

function showMenu() {
	var frame = $('#menudropdownframe');
	frame.css('width', 305 * zoomFactor);
	frame.css('height', 305 * zoomFactor);

	$('#menudropdownframe #menuitems').slideDown();
}

function hideMenu() {
	var frame = $('#menudropdownframe');

	frame.css('width', 30 * zoomFactor);
	frame.css('height', 30 * zoomFactor);

	$('#menudropdownframe #menuitems').hide();
}

function toggleMenu() {
	if ($('#menudropdownframe #menuitems').is(':visible')) {
		hideMenu();
	} else {
		showMenu();
	}
}

function showImpressum() {
	$("#popupframe").css('visibility', 'visible');
	$("#popupframe").css('z-index', '20');
}

function closeImpressum() {
	$("#popupframe").css('visibility', 'hidden');
	$("#popupframe").css('z-index', '0');
}

$(document).ready(function() {
	hideMenu();

	$('#menudropdownframe #menuitems').on('click', function() {
		hideMenu();
		closeImpressum();
	});
});
