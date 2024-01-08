document.addEventListener("DOMContentLoaded", function () {
    var viewAllButton = document.getElementById('viewAllButton');
    var viewAllCakes = document.getElementById('viewAllCakes');
    var menuSection = document.getElementById('Menu');

    viewAllCakes.style.display = 'none';
    menuSection.style.height = '100vh';

    // Add click event listener to the "View all" button
    viewAllButton.addEventListener('click', function () {
      // Toggle the visibility of the target div
      viewAllCakes.style.display = (viewAllCakes.style.display === 'none' || viewAllCakes.style.display === '') ? 'block' : 'none';

      // Adjust the height of the menu section based on the visibility of the div
      menuSection.style.height = (viewAllCakes.style.display === 'none' || viewAllCakes.style.display === '') ? '100vh' : 'auto';
    });
  });