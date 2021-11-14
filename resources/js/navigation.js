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

document.querySelectorAll('button.toggle-child-menu').forEach(button => {
    button.addEventListener('click', event => {
        if (button.getAttribute('aria-expanded') === 'true') {
            button.setAttribute('aria-expanded', 'false');
        } else {
            button.setAttribute('aria-expanded', 'true');
        }
    })
})