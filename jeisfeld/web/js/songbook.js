async function searchSongs() {
	let query = document.getElementById("searchBox").value.trim();
	if (query === "") {
		document.getElementById("results").innerHTML = "";
		return;
	}

	let response = await fetch("search.php?q=" + encodeURIComponent(query));
	let songs = await response.json();

	let tableHTML = "";
	songs.forEach(song => {
		tableHTML += `
             <tr>
                 <td>${song.id}</td>
                 <td>${song.title}</td>
                 <td class="author-col">${song.author || ""}</td>
                 <td class="actions">
                     <img src="/img/text.png" alt="View Text" class="icon-btn" onclick="showText('${song.id}', '${song.title}')">
                     <img src="/img/chords.png" alt="View Image" class="icon-btn" onclick="showImage('${song.tabfilename}')">
                     <img src="/img/play.png" alt="Play Audio" class="icon-btn" onclick="playAudio('${song.mp3filename}')">
                 </td>
             </tr>
         `;
	});

	document.getElementById("results").innerHTML = tableHTML;
}

function playAudio(mp3filename) {
	if (!mp3filename) return;
	document.getElementById("popup-body").innerHTML = `
         <audio controls autoplay>
             <source src="/audio/songs/${encodeURIComponent(mp3filename)}" type="audio/mpeg">
             Your browser does not support the audio element.
         </audio>
     `;
	document.getElementById("popup").style.display = "flex";
	document.body.classList.add("no-scroll"); // Disable main page scrolling
}

function showText(id, title) {
	fetch("search.php?q=" + encodeURIComponent(id))
		.then(response => response.json())
		.then(songs => {
			if (!songs || songs.length === 0 || !songs[0].text) {
				document.getElementById("popup-body").innerHTML = `<h2>${title}</h2><p>No text available.</p>`;
			} else {
				let songText = songs[0].text.replace(/\n/g, '<br>');

				document.getElementById("popup-body").innerHTML = `
                     <div class="text-popup-content">
                         <div class="font-controls">
                             <button class="font-btn" onclick="adjustFontSize(0.8696)">A-</button>
                             <button class="font-btn" onclick="adjustFontSize(1.15)">A+</button>
                         </div>
                         <div class="text-content" id="text-content">${songText}</div>
                     </div>
                 `;

				adjustTextSize();
				ensureTextPositioning();
			}

			document.getElementById("popup").style.display = "flex";
			document.body.classList.add("no-scroll"); // Disable main page scrolling
			enterFullscreen();
		});
}


function adjustFontSize(change) {
	let textContent = document.getElementById("text-content");
	if (!textContent) return;

	let currentSize = parseFloat(window.getComputedStyle(textContent).fontSize);
	let newSize = Math.max(10, Math.round(currentSize * change));
	textContent.style.fontSize = newSize + "px";

	ensureTextPositioning(); // Recheck positioning after resizing
}

function adjustTextSize() {
	let textContent = document.getElementById("text-content");
	if (!textContent) return;

	let screenWidth = window.innerWidth;
	let screenHeight = window.innerHeight;
	let baseSize = Math.min(screenWidth, screenHeight) * 0.05;

	textContent.style.fontSize = `${Math.max(baseSize, 16)}px`;
}

function ensureTextPositioning() {
	let textContent = document.getElementById("text-content");
	if (!textContent) return;

	// If the text content is shorter than 80% of the screen, center it
	if (textContent.scrollHeight < window.innerHeight * 0.8) {
		textContent.style.margin = "auto 0"; // Center vertically
	} else {
		textContent.style.margin = "0"; // Keep text at the top
	}
}

function autoRotateAndSizeImage() {
	const img = document.getElementById("popup-image");
	if (!img) return;

	// Determine if we need to rotate
	let isPortrait = window.innerHeight > window.innerWidth;
	let rotation = isPortrait ? 90 : 0;

	// Apply rotation first
	img.style.transform = `rotate(${rotation}deg)`;
	img.dataset.rotation = rotation; // Store rotation for touch interactions

	// Now apply correct sizing AFTER rotation
	setTimeout(() => {
		if (rotation === 90) {
			img.style.width = "100vh";  // Height becomes new width
			img.style.height = "100vw"; // Width becomes new height
		} else {
			img.style.width = "100vw";
			img.style.height = "100vh";
		}
		img.style.objectFit = "contain"; // Maintain aspect ratio
	}, 100);
}

function showImage(tabfilename) {
	if (!tabfilename) return;

	document.getElementById("popup-body").innerHTML = `
         <img id="popup-image" src="/img/songs/${encodeURIComponent(tabfilename)}">
     `;
	document.getElementById("popup").style.display = "flex";
	document.body.classList.add("no-scroll"); // Disable main page scrolling
	enterFullscreen();

	// Allow image to load first, then apply rotation, resizing, and touch interactions
	setTimeout(() => {
		autoRotateAndSizeImage();
		enableImageInteractions();
	}, 50);
}

function enableImageInteractions() {
	const img = document.getElementById("popup-image");
	let scale = 1; // Default zoom level
	let lastTouchDistance = 0;
	let isDragging = false;
	let startX = 0, startY = 0, translateX = 0, translateY = 0;

	// Store rotation angle (preserved during zoom & pan)
	let rotation = img.style.transform.includes("rotate(90deg)") ? 90 : 0;
	img.dataset.rotation = rotation; // Save rotation to dataset

	img.addEventListener("touchstart", (e) => {
		if (e.touches.length === 2) {
			lastTouchDistance = getTouchDistance(e.touches);
		} else if (e.touches.length === 1) {
			isDragging = true;
			startX = e.touches[0].clientX - translateX;
			startY = e.touches[0].clientY - translateY;
		}
	});

	img.addEventListener("touchmove", (e) => {
		if (e.touches.length === 2) {
			// Handle pinch-to-zoom
			e.preventDefault();
			const newDistance = getTouchDistance(e.touches);
			scale *= newDistance / lastTouchDistance;
			lastTouchDistance = newDistance;
		} else if (e.touches.length === 1 && isDragging) {
			// Handle panning (dragging)
			e.preventDefault();
			translateX = e.touches[0].clientX - startX;
			translateY = e.touches[0].clientY - startY;
		}

		// Apply transform with preserved rotation
		img.style.transform = `translate(${translateX}px, ${translateY}px) scale(${scale}) rotate(${rotation}deg)`;
	});

	img.addEventListener("touchend", () => {
		isDragging = false;
	});

	function getTouchDistance(touches) {
		const dx = touches[0].clientX - touches[1].clientX;
		const dy = touches[0].clientY - touches[1].clientY;
		return Math.sqrt(dx * dx + dy * dy);
	}
}

function enterFullscreen() {
	let elem = document.documentElement; // Fullscreen for the entire document

	if (elem.requestFullscreen) {
		elem.requestFullscreen();
	} else if (elem.mozRequestFullScreen) { // Firefox
		elem.mozRequestFullScreen();
	} else if (elem.webkitRequestFullscreen) { // Chrome, Safari, Edge
		elem.webkitRequestFullscreen();
	} else if (elem.msRequestFullscreen) { // IE/Edge
		elem.msRequestFullscreen();
	}
}

function closePopup() {
	document.getElementById("popup").style.display = "none";
	document.getElementById("popup-body").innerHTML = "";
	document.body.classList.remove("no-scroll"); // Re-enable main page scrolling

	// Exit fullscreen mode when closing
	exitFullscreen();
}

function exitFullscreen() {
	if (document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement) {
		if (document.exitFullscreen) {
			document.exitFullscreen();
		} else if (document.mozCancelFullScreen) { // Firefox
			document.mozCancelFullScreen();
		} else if (document.webkitExitFullscreen) { // Chrome, Safari, Edge
			document.webkitExitFullscreen();
		} else if (document.msExitFullscreen) { // IE/Edge
			document.msExitFullscreen();
		}
	}
}

// Close pop-up when pressing Escape key
document.addEventListener("keydown", function(event) {
	if (event.key === "Escape") {
		closePopup();
	}
});

document.addEventListener("DOMContentLoaded", function() {
	document.getElementById("searchBox").focus();
});




// Define the text for English and German versions.
const texts = {
	en: {
		title: "Title",
		author: "Author(s)",
		actions: "Actions",
		circlesongarchive: "Circle Song Archive",
		impressum: "Imprint"
	},
	de: {
		title: "Titel",
		author: "Urheber:innen",
		actions: "Aktionen",
		circlesongarchive: "Circle Song Archive",
		impressum: "Impressum"
	}
};

// Detect the browser language; default to English if not German.
const userLang = navigator.language.slice(0, 2) === 'de' ? 'de' : 'en';

// Update text content for each element based on the detected language.
document.getElementById("title").textContent = texts[userLang].title;
document.getElementById("author").textContent = texts[userLang].author;
document.getElementById("actions").textContent = texts[userLang].actions;
document.getElementById("circlesongarchive").textContent = texts[userLang].circlesongarchive;
document.getElementById("impressum-link").textContent = texts[userLang].impressum;


// handle modal impressum

// Get the modal and related elements
const modal = document.getElementById('impressum-modal');
const openModalLink = document.getElementById('impressum-link');
const closeModalBtn = document.getElementById('close-modal');
const impressumContent = document.getElementById('impressum-content');

// When the link is clicked, load the impressum.html file and display the modal
openModalLink.addEventListener('click', function(event) {
	event.preventDefault();
	// Fetch the external impressum.html content
	fetch('/impressum.html')
		.then(response => {
			if (!response.ok) {
				throw new Error('Network response was not ok');
			}
			return response.text();
		})
		.then(data => {
			// Insert the fetched content into the modal
			impressumContent.innerHTML = data;
			// Display the modal
			modal.style.display = 'block';
		})
		.catch(error => {
			impressumContent.innerHTML = '<p>Error loading content.</p>';
			modal.style.display = 'block';
			console.error('Error fetching Impressum:', error);
		});
});

// When the close button is clicked, hide the modal
closeModalBtn.addEventListener('click', function() {
	modal.style.display = 'none';
});

// Also hide the modal if the user clicks outside of the modal content
window.addEventListener('click', function(event) {
	if (event.target === modal) {
		modal.style.display = 'none';
	}
});

