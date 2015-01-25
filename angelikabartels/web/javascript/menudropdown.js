function showMenu() {
	var frame = $('#menudropdownframe', parent.document);
	frame.css('width', 350);
	frame.css('height', 350);

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
	} else {
		showMenu();
	}
}

$(document).ready(function() {
	hideMenu();

	$('#menuitems').on('click', function() {
		hideMenu();
	});
});
