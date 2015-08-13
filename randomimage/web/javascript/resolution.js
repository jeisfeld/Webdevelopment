function adjustStyle(width, height) {
	width = parseInt(width);
	height = parseInt(height);
	var headerframe = $("#headerframe");
	var menuleftframe = $('#menuleftframe');
	var mainframe = $('#mainframe');
	var mobileheaderframe = $("#mobileheaderframe");
	var mobileframe = $("#mobileframe");

	if (headerframe.length > 0) {
		// desktop
		var headerHeight = headerframe.outerHeight(true);
		menuleftframe.css('height', height - headerHeight);
		menuleftframe.css('width', width * 0.2);
		mainframe.css('height', height - headerHeight);
		mainframe.css('width', width * 0.8 - 1);
		mainframe.css('left', width * 0.2 + 1);
	} else {
		// mobile
		var headerHeight = mobileheaderframe.outerHeight(true);
		mobileframe.css('height', height - headerHeight);
		mobileheaderframe.contents().find("#homebutton").css('left', width - 32);
	}
}

function adjustMainStyle() {
	adjustStyle($(window).width(), $(window).height());
}

$(window).resize(function() {
	adjustMainStyle();
});

$(document).ready(function() {
	$('#mobileheaderframe').on("load", function() {
		adjustMainStyle();
	});

	$('#menuleftframe').on("load", function() {
		adjustMainStyle();
	});

	adjustMainStyle();
});
