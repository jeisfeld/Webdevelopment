/**
 * Show the info box for a certain id.
 * 
 * @param id
 *            The id (last name in lower case).
 */
function showInfoBox(id) {
	var boxid = "text-" + id;
	var box = $('body#mainpage').find('#' + boxid);
	box.show();
}

/**
 * Hide the info box for a certain id.
 * 
 * @param id
 *            The id (last name in lower case).
 */
function hideInfoBox(id) {
	var boxid = "text-" + id;
	var box = $('body#mainpage').find('#' + boxid);
	box.hide();
}


$(document).ready(function() {

	var area = $('body#mainpage').find('area');

	area.mouseover(function() {
		var id = $(this).attr('id');
		showInfoBox(id);
	});

	area.mouseout(function() {
		var id = $(this).attr('id');
		hideInfoBox(id);
	});

	area.attr('href', function() {
		return $(this).attr('id') + '.html'
	});
	
	var boxes = $('body#mainpage').find('.hoverbox');
	boxes.hide();

});
