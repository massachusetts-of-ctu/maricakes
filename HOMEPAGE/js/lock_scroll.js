  document.addEventListener("DOMContentLoaded", function () {
    // Get the body element
    var body = document.body;

    // Get the "Home" link
    var homeLink = document.querySelector('.navbar .menu li a[href="#Home"]');

    // Get the button element
    var button = document.querySelector('.button a');

    // Check if the user is on the homepage
    var isHomepage = window.location.hash === '#Home';

    // Show or hide the button based on the homepage status
    button.style.display = isHomepage ? 'none' : 'block';

    // Turn off the scroll bar when the page loads
    body.style.overflow = isHomepage ? 'hidden' : 'auto';

    // Add click event listener to the "Home" link
    homeLink.addEventListener('click', function () {
      // Turn off the scroll bar when the "Home" link is clicked
      body.style.overflow = 'hidden';
      // Hide the button when returning to the "Home" section
      button.style.display = 'none';
    });

    // Add click event listeners to other navigation links
    var navLinks = document.querySelectorAll('.navbar .menu li a:not([href="#Home"])');
    navLinks.forEach(function (link) {
      link.addEventListener('click', function () {
        // Enable the scroll bar by setting overflow to auto
        body.style.overflow = 'auto';
        // Show the button when clicking on other navigation links
        button.style.display = 'block';
      });
    });
  });
