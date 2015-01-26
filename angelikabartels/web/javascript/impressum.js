function closeImpressum() {
	$("#popupframe", window.parent.document).css('visibility', 'hidden');
	$("#popupframe", window.parent.document).css('z-index', '0');
}

function showImpressum() {
	$("#popupframe", window.parent.document).css('visibility', 'visible');
	$("#popupframe", window.parent.document).css('z-index', '20');
	$("#popupframe", window.parent.document).attr("src","impressum.html");
}

function multiplyCss(pattern, parameter, factor) {
	var oldValue = $(pattern).css(parameter);
	if (oldValue.indexOf('px') > 0) {
		oldValue = oldValue.substr(0, oldValue.indexOf('px'));
	}
	var newValue = '' + parseInt(oldValue) * factor + 'px';
	$(pattern).css(parameter, newValue);
}

/**
 * Increaze some sizes in order to fit better on mobile devices.
 */
function adaptToHighResolution() {
	if (window.devicePixelRatio > 1
			&& /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		zoomFactor = window.devicePixelRatio;
//		multiplyCss('#impressum #impressumtable td', 'font-size', zoomFactor * 0.7);
//		multiplyCss('#impressum #impressumtable p', 'font-size', zoomFactor * 0.7);
//		multiplyCss('#impressum a.closeImpressum', 'font-size', zoomFactor * 0.7);
//		multiplyCss('#impressum h2', 'font-size', zoomFactor * 0.7);
	}
}

$(document).ready(function() {
	adaptToHighResolution();
});
