// Toggle menu
document.getElementById('nav-hamburger').addEventListener('click', () => {
    document.getElementsByTagName('nav')[0].classList.toggle('open');

    const navElem = document.querySelectorAll('nav .nav-element');

    document.getElementById('nav-hamburger').classList.toggle('open');

    navElem.forEach(el => {
        if (el.classList.contains('nav-element')) 
            el.classList.toggle('nav-element-force-visible');
    });
});

// Close menu after an action
const navbar = document.querySelector('nav');

function closeNavbar() {
    document.getElementById('nav-hamburger').classList.toggle('open');

    navbar.classList.remove('open');

    const navElem = document.querySelectorAll('nav .nav-element');
    navElem.forEach(el => {
        if (el.classList.contains('nav-element')) 
            el.classList.remove('nav-element-force-visible');
    });
}

navbar.querySelectorAll(':is(a, button).close-menu-action').forEach(el => {
    el.addEventListener('click', () => {
        closeNavbar();
    });
});

navbar.querySelectorAll('select.close-menu-action').forEach(el => {
    el.addEventListener('change', () => {
        closeNavbar();
    });
});