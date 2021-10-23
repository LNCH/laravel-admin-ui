const mobileNavToggle = document.getElementById('la_mobile-nav-toggle-button');
const pageWrapper = document.querySelector('.la_page-wrapper');

mobileNavToggle.addEventListener('click', () => {

    if (pageWrapper.classList.contains('nav-open')) {
        // Closing the nav...
        pageWrapper.classList.remove('nav-open');
        mobileNavToggle.querySelector('.menu-bars-icon').classList.remove('close-icon');
    } else {
        // Open that nav...
        pageWrapper.classList.add('nav-open');
        mobileNavToggle.querySelector('.menu-bars-icon').classList.add('close-icon');
    }
});