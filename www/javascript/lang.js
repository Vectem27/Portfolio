const languageSelect = document.getElementById('language-select');
const currentLang = localStorage.getItem('lang') || 'fr';

function applyTranslations(translations) 
{
    if (translations.id) 
    {
        for (const [key, value] of Object.entries(translations.id)) 
        {
            const el = document.getElementById(key);
            if (el) 
                el.textContent = value;
        }
    }

    if (translations.tag) 
    {
        for (const [tag, value] of Object.entries(translations.tag)) 
        {
            const elements = document.getElementsByTagName(tag);
            if (elements.length > 0) 
                elements[0].textContent = value; // prend le premier
        }
    }

    if (translations.class) 
    {
        for (const [cls, value] of Object.entries(translations.class)) 
        {
            const elements = document.getElementsByClassName(cls);
            for (let el of elements) 
            {
                el.textContent = value;
            }
        }
    }
}

function loadTranslations(lang) 
{
    fetch(`lang/${lang}.json`)
        .then(res => res.json())
        .then(translations => {
            applyTranslations(translations);
        })
        .catch(() => {
            console.error(`Failed to change language: ${lang}`);
        });
}

languageSelect.value = currentLang;
loadTranslations(currentLang);

languageSelect.addEventListener('change', () => {
    const selectedLang = languageSelect.value;
    localStorage.setItem('lang', selectedLang);
    loadTranslations(selectedLang);
});
