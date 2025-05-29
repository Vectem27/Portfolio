document.getElementById('nav-hamburger').addEventListener('click', () => {
    document.getElementsByTagName('nav')[0].classList.toggle('open');

    const navElem = document.querySelectorAll('nav .nav-element');

    document.getElementById('nav-hamburger').classList.toggle('open');

    navElem.forEach(el => {
        if (el.classList.contains('nav-element')) 
            el.classList.toggle('nav-element-force-visible');
    });
});