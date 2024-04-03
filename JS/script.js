 // JavaScript function to navigate to a specific section of the webpage
 function navigateTo(sectionId) {
  document.querySelector(sectionId).scrollIntoView({
      behavior: 'smooth' // Smooth scrolling behavior
  });
}

// JavaScript function to toggle the menu on smaller screens
function toggleMenu() {
  var menu = document.querySelector('.menu');
  menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
}