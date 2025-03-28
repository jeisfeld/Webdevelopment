// Define the text for English and German versions.
const texts = {
	en: {
		music: "Music",
		social: "Social Networks",
		otherProjects: "Other Projects",
		impressum: "Imprint",
		heilsamelieder: "Circle Songs"
	},
	de: {
		music: "Musik",
		social: "Soziale Netzwerke",
		otherProjects: "Andere Projekte",
		impressum: "Impressum",
		heilsamelieder: "Heilsame Lieder"
	}
};

// Detect the browser language; default to English if not German.
const userLang = navigator.language.slice(0, 2) === 'de' ? 'de' : 'en';

// Update text content for each element based on the detected language.
document.getElementById("music").textContent = texts[userLang].music;
document.getElementById("social").textContent = texts[userLang].social;
document.getElementById("otherProjects").textContent = texts[userLang].otherProjects;
document.getElementById("impressum-link").textContent = texts[userLang].impressum;
document.getElementById("heilsame-lieder").textContent = texts[userLang].heilsamelieder;


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
	fetch('impressum.html')
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

// Background photo gallery

const totalImages = 4;
const basePath = '../img/joerg';
const extension = '.jpg';

let currentIndex = 1;
let currentDiv = 1;

const bg1 = document.getElementById('bg1');
const bg2 = document.getElementById('bg2');

// Preload images
for (let i = 1; i <= totalImages; i++) {
  const img = new Image();
  img.src = `${basePath}${i}${extension}`;
}

// Show first image instantly
bg1.style.backgroundImage = `url('${basePath}${currentIndex}${extension}')`;
bg1.classList.add('active', 'instant');

// Remove "instant" class shortly after (so transition is enabled for future fades)
setTimeout(() => {
  bg1.classList.remove('instant');
}, 50); // 50ms is enough to apply the style

currentIndex = (currentIndex % totalImages) + 1;

setInterval(() => {
  const nextImage = `${basePath}${currentIndex}${extension}`;
  const fadingIn = currentDiv === 1 ? bg2 : bg1;
  const fadingOut = currentDiv === 1 ? bg1 : bg2;

  fadingIn.style.backgroundImage = `url('${nextImage}')`;
  fadingIn.classList.add('active');
  fadingOut.classList.remove('active');

  currentDiv = currentDiv === 1 ? 2 : 1;
  currentIndex = (currentIndex % totalImages) + 1;
}, 8000);




