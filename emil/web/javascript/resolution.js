/*
 * Actions triggered on load of page.
 */
$(document).ready(function() {
	width = parseInt($(this).width());

	if (width > 650) {
		$('body').wrap('<div id="musikwrapper" />')
		$('td.audiowithlabel').contents().unwrap();
		$('div.audiolabel').wrap('<td />');
		$('div.audio').wrap('<td />');
		$('audio').css('width', width / 2);
	}
	
});
