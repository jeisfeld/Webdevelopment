function markChosen(frame, id) {
	if(frame) {
		var t = $(frame.getElementById(id));
		var s = $(frame).find('a');
		//alert(t.html());
		if(t) {
			s.removeClass('chosen');
			t.addClass('chosen');
		}
	}
	return (t != null && t.html().toLowerCase().match('span'));
}


$(document).ready(function() {
	var myId=$('body').attr('id');
	var frame, result;
	
	// first try in top frame
	try {
		frame = top.main.menutop.document;
		result = markChosen(frame, myId);
	}
	catch (e) {
	}

	// otherwise, try in left frame
	if(!result) {
		frame = top.menu.document;
		markChosen(frame, myId);
	}
	
});
