const mobileNavToggle = document.getElementById('la_mobile-nav-toggle-button');
const pageWrapper = document.querySelector('.la_page-wrapper');

mobileNavToggle.addEventListener('click', () => {
    pageWrapper.classList.toggle('nav-open');
});