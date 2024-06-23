
// Ouverture du menu au Click
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const menuOpen = document.querySelector('.menuOpen');
    menuToggle.addEventListener('click', function() {
    menuToggle.classList.toggle('activation');
    menuOpen.classList.toggle('activation'); 
  });
});

//Fermeture du menu au Click
const menuListing = document.querySelectorAll('.menu-listing');
const menuOpen = document.querySelector('.menuOpen');
menuListing.forEach(function(item) {
    item.addEventListener('click', function() {
        menuOpen.classList.remove('activation')
        console.log('Item clicked:', item);
    });
});

