function loadPage() {
	var path = $(this).attr('path');
	$(this).load(path);
}

$(document).ready(function() {

	$('#allcontent div.load').each(loadPage);

});
