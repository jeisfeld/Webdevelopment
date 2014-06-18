$(document).ready(function() {

	var menu = $('body#menuleft');
	var a = menu.find('a');

	// include the links in table structure.
	menu.wrapInner($('<table width="100%" />'));
	a.wrap($('<tr />')).wrap($('<td />'));

});
