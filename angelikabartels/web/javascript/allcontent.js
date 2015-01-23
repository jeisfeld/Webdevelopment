function loadPage() {
	var path = $(this).attr('path');
	$(this).load(path);
}

$(document).ready(function() {

	$.ajaxSetup({
		'beforeSend' : function(xhr) {
			xhr.overrideMimeType('text/html; charset=ISO-8859-1');
		},
	});

	$('#allcontent div.load').each(loadPage);

	$('#pageloading').remove();

	$('#allcontent div.loadfinally').each(loadPage);

});
