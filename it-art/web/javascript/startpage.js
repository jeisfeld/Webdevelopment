var colorsAreSet = false;

function shuffle(array) {
	var currentIndex = array.length, temporaryValue, randomIndex;

	// While there remain elements to shuffle...
	while (0 !== currentIndex) {

		// Pick a remaining element...
		randomIndex = Math.floor(Math.random() * currentIndex);
		currentIndex -= 1;

		// And swap it with the current element.
		temporaryValue = array[currentIndex];
		array[currentIndex] = array[randomIndex];
		array[randomIndex] = temporaryValue;
	}

	return array;
}

function setRandomizedRgb(id, red, green, blue) {

	var rgb = 'rgb(' + red + ',' + green + ',' + blue + ')';
	$(id).css('background-color', rgb);
}

function getRandom(max) {
	return Math.floor(Math.random() * max);
}

function setColors() {
	if (colorsAreSet) {
		return;
	}
	colorsAreSet = true;

	var idArray = shuffle(['#startlinkwebseiten', '#startlinkgrafik', '#startlinkmusik', '#startlinkapps']);

	setRandomizedRgb(idArray[0], 96 + getRandom(32), 112 + getRandom(32), 0);
	setRandomizedRgb(idArray[1], 0, 112 + getRandom(32), 88 + getRandom(32));
	setRandomizedRgb(idArray[2], 72 + getRandom(16), 112 + getRandom(32), 32 + getRandom(16));
	setRandomizedRgb(idArray[3], 40 + getRandom(16), 112 + getRandom(32), 64 + getRandom(16));

	var rand1 = Math.random() + 0.01;
	var rand2 = Math.random() + 0.01;
	var rand3 = Math.random() + 0.01;
	var sum = rand1 + rand2 + rand3;
	var red = Math.floor(160 * rand1 / sum);
	var green = Math.floor(127 + 112 * rand2 / sum);
	var blue = Math.floor(160 * rand3 / sum);

}

function position(totalwidth, totalheight, object, horizontal, vertical, delay, hasOffset) {

	var targetWidth = 300;
	var targetHeight = 80;
	var targetFontSize = 32;
	if (totalwidth < 620) {
		targetWidth = 240;
		targetHeight = 60;
		targetFontSize = 26;
	}
	else if (totalwidth < 850) {
		targetWidth = 270;
		targetHeight = 70;
		targetFontSize = 28;
	}

	if (hasOffset) {
		object.offset({
			top: totalheight * (vertical + 0.5 * (Math.random() - 0.5)),
			left: totalwidth * (horizontal + 0.5 * (Math.random() - 0.5))
		});
	}

	var targetTop = (totalheight - targetHeight) * vertical;
	var targetLeft = (totalwidth - targetWidth) * horizontal;

	object.stop();

	object.delay(hasOffset?delay:0).animate({
		width: targetWidth,
		height: targetHeight,
		lineHeight: targetHeight,
		fontSize: targetFontSize,
		left: targetLeft,
		top: targetTop
	}, "slow");
}

function animateStartpage(width, height, hasOffset) {
	width = parseInt(width);
	height = parseInt(height);
	setColors();

	if (height > 500) {
		position(width, height, $('#startlinkwebseiten'), 0.35, 0.2, 0, hasOffset);
		position(width, height, $('#startlinkgrafik'), 0.45, 0.4, 200, hasOffset);
		position(width, height, $('#startlinkmusik'), 0.55, 0.6, 400, hasOffset);
		position(width, height, $('#startlinkapps'), 0.65, 0.8, 600, hasOffset);
	} else if (height > 400) {
		position(width, height, $('#startlinkwebseiten'), 0.35, 0.05, hasOffset);
		position(width, height, $('#startlinkgrafik'), 0.45, 0.35, 200, hasOffset);
		position(width, height, $('#startlinkmusik'), 0.55, 0.65, 400, hasOffset);
		position(width, height, $('#startlinkapps'), 0.65, 0.95, 600, hasOffset);
	} else {
		position(width, height, $('#startlinkwebseiten'), 0.2, 0.05, hasOffset);
		position(width, height, $('#startlinkgrafik'), 0.8, 0.35, 200, hasOffset);
		position(width, height, $('#startlinkmusik'), 0.2, 0.65, 400, hasOffset);
		position(width, height, $('#startlinkapps'), 0.8, 0.95, 600, hasOffset);
	}

}

$(window).resize(function() {
	animateStartpage($("#mainframe").width(), $("#mainframe").height(), false);
});

$(document).ready(function() {
	animateStartpage($("#mainframe").width(), $("#mainframe").height(), true);
});
