$(document).ready(function() {

	$(".closeImpressum").click(function() {
		$("#popupframe", window.parent.document).css('visibility', 'hidden');
	})

	$(".showImpressum").click(function() {
		$("#popupframe", window.parent.document).css('visibility', 'visible');
	})

});