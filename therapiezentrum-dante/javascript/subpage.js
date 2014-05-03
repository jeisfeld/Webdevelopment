function markMenuItem(frame, id) {
	if(frame) {
		var t = $(frame.getElementById(id));
		var s = $(frame).find('a');

		if(t) {
			s.removeClass('chosen');
			t.addClass('chosen');
		}
	}
}

function setBackground(frame, id) {
	var b = $(frame).find('body');
	if(frame) {
		b.removeClass();
		b.addClass(id);
	}
}


$(document).ready(function() {
	// Mark menu item
	var myId=$('body').attr('id');

	var menuframe = top.menu.document;
	markMenuItem(menuframe, myId);
	
	// Set background
	var maindocument = top.document;
	setBackground(maindocument, myId);
	
});
