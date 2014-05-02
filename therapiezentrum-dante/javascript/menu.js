$(document).ready(function() {

	var menu = $('body#menuleft');
	var a = menu.find('a');

	// include the links in table structure.
	menu.wrapInner($('<table width="100%" />'));
	a.wrap($('<tr />')).wrap($('<td />'));

	a.hover(function() {
		var t = $(this), s = t.siblings('a');
		t.toggleClass('highlight');
		s.toggleClass('blur');
	});

});
