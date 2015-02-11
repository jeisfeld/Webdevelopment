function closeImpressum() {
	$("#popupframe", window.parent.document).css('visibility', 'hidden');
	$("#popupframe", window.parent.document).css('z-index', '0');
}

function showImpressum() {
	$("#popupframe", window.parent.document).css('visibility', 'visible');
	$("#popupframe", window.parent.document).css('z-index', '20');
	var url = $("#popupframe", window.parent.document).attr('data-link');
	$("#popupframe", window.parent.document).attr('src',url);
}
