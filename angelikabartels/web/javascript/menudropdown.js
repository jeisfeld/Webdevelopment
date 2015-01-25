var zoomFactor = 1;

function showMenu() {
	var frame = $('#menudropdownframe', parent.document);
	frame.css('width', 350 * zoomFactor);
	frame.css('height', 350 * zoomFactor);

	$('#menuitems').slideDown();
}

function hideMenu() {
	var frame = $('#menudropdownframe', parent.document);

	frame.css('width', 30 * zoomFactor);
	frame.css('height', 30 * zoomFactor);

	$('#menuitems').hide();
}

function toggleMenu() {
	if ($('#menuitems').is(':visible')) {
		hideMenu();
	} else {
		showMenu();
	}
}

/**
 * Get CSS pixel value as integer
 */
function getCssInt(value) {
	if (value.indexOf('px') > 0) {
		value = value.substr(0, value.indexOf('px'));
	}
	return parseInt(value);
}

/**
 * Utility method that multiplies CSS px values by the device resolution factor (for smartphones).
 */
function multiplyCss(pattern, parameter) {
	var oldValue = $(pattern).css(parameter);
	oldValue = getCssInt(oldValue);
	var newValue = '' + oldValue * zoomFactor + 'px';
	$(pattern).css(parameter, newValue);
}

/**
 * Increaze some sizes in order to fit better on mobile devices.
 */
function adaptToHighResolution() {
	if (window.devicePixelRatio > 1
			&& /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		zoomFactor = window.devicePixelRatio;
		$('#menudropdown img.icon').attr('src', 'img/icon_menu_white.png');
		$('#menudropdown img.icon').css('width', 24 * zoomFactor);
		$('#menudropdown img.icon').css('height', 24 * zoomFactor);

		multiplyCss('#menudropdown li a', 'width');
		multiplyCss('#menudropdown li a', 'height');
		multiplyCss('#menudropdown li a', 'line-height');
		multiplyCss('#menudropdown li a', 'font-size');

	}
}

$(document).ready(function() {
	adaptToHighResolution();

	hideMenu();

	$('#menuitems').on('click', function() {
		hideMenu();
	});

});
