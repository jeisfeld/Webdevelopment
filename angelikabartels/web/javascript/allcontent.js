var pagesLoaded = 0;
var imagesLoaded = 0;
var totalPages = 0;
var totalImages = 0;

function imageLoaded() {
	imagesLoaded++;
	if (imagesLoaded == totalImages) {
		window.print();
	}
}

function loadPage() {
	var path = $(this).attr('path');
	$(this).load(path, function(responseData) {
		pagesLoaded += 1;

		if (pagesLoaded == totalPages) {
			var images = $(document).find('img');
			totalImages = images.size();

			images.each(function() {
				if (this.complete) {
					imageLoaded.call(this);
				} else {
					$(this).one('load', imageLoaded);
				}
			});

			totalImages = $(document).find('img').size();
		}
	});
}

$(document).ready(function() {

	$.ajaxSetup({
		'beforeSend' : function(xhr) {
			xhr.overrideMimeType('text/html; charset=ISO-8859-1');
		},
	});

	var pagesToBeLoaded = $('#allcontent div.load');
	totalPages = pagesToBeLoaded.size();

	pagesToBeLoaded.each(loadPage);
});
