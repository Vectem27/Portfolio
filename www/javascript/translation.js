const languageSelect = document.getElementById('language-select');
const currentLang = localStorage.getItem('lang') || 'fr';

function changeLanguage(newLang) 
{
    const supportedLangs = ['fr', 'en']; // langues valides
    const path = window.location.pathname;
    const segments = path.split('/').filter(Boolean); // enlève les vides

    // Vérifie si le premier segment est une langue
    if (segments.length > 0 && supportedLangs.includes(segments[0]))
        segments[0] = newLang; // remplace la langue
    else
        segments.unshift(newLang); // ajoute la langue
    

    const newPath = '/' + segments.join('/');
    window.location.href = newPath; // recharge la page avec la nouvelle langue
}

languageSelect.addEventListener('change', () => {
    const selectedLang = languageSelect.value;
    localStorage.setItem('lang', selectedLang);
    changeLanguage(selectedLang);
});
