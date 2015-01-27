var zoomFactor = 1;

function showMenu() {
	var frame = $('#menudropdownframe', parent.document);
	frame.css('width', 305 * zoomFactor);
	frame.css('height', 305 * zoomFactor);

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

function showImpressum() {
	$("#popupframe", window.parent.document).css('visibility', 'visible');
	$("#popupframe", window.parent.document).css('z-index', '20');
	$("#popupframe", window.parent.document).attr("src","impressum.html");
}

function hideImpressum() {
	$("#popupframe", window.parent.document).css('visibility', 'hidden');
	$("#popupframe", window.parent.document).css('z-index', '0');
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
		multiplyCss('#menudropdown img.icon', 'width');
		multiplyCss('#menudropdown img.icon', 'height');
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
		hideImpressum();
	});

});
