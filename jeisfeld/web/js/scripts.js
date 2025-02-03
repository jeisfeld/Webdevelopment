// Define the text for English and German versions.
const texts = {
	en: {
		music: "Music",
		social: "Social Networks",
		otherProjects: "Other Projects",
		impressum: "Imprint"
	},
	de: {
		music: "Musik",
		social: "Soziale Netzwerke",
		otherProjects: "Andere Projekte",
		impressum: "Impressum"
	}
};

// Detect the browser language; default to English if not German.
const userLang = navigator.language.slice(0, 2) === 'de' ? 'de' : 'en';

// Update text content for each element based on the detected language.
document.getElementById("music").textContent = texts[userLang].music;
document.getElementById("social").textContent = texts[userLang].social;
document.getElementById("otherProjects").textContent = texts[userLang].otherProjects;
document.getElementById("impressum-link").textContent = texts[userLang].impressum;


// handle modal impressum

// Get the modal and related elements
const modal = document.getElementById('impressum-modal');
const openModalLink = document.getElementById('impressum-link');
const closeModalBtn = document.getElementById('close-modal');
const impressumContent = document.getElementById('impressum-content');

// When the link is clicked, load the impressum.html file and display the modal
openModalLink.addEventListener('click', function (event) {
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
closeModalBtn.addEventListener('click', function () {
	modal.style.display = 'none';
});

// Also hide the modal if the user clicks outside of the modal content
window.addEventListener('click', function (event) {
	if (event.target === modal) {
		modal.style.display = 'none';
	}
});

