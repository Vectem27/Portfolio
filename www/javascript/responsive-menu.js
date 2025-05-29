document.getElementById('nav-hamburger').addEventListener('click', () => {
    document.getElementsByTagName('nav')[0].classList.toggle('open');


    const elements = document.querySelectorAll('nav .nav-element');

    // Sauter le premier élément
    elements.forEach(el => {
        if (el.classList.contains('nav-element')) {
            el.classList.toggle('nav-element-force-visible');
        }
    });
});