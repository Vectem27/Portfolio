const body = document.body;
const toggleBtn = document.getElementById('toggle-theme-btn');

const themes = ['light', 'dark'];
let currentTheme = localStorage.getItem('theme') || 'dark';

function applyTheme(theme) {
  if (theme === 'dark') {
    body.removeAttribute('data-theme');
  } else {
    body.setAttribute('data-theme', theme);
  }
  localStorage.setItem('theme', theme);
}

applyTheme(currentTheme);

toggleBtn.addEventListener('click', () => {
  currentTheme = currentTheme === 'light' ? 'dark' : 'light';
  applyTheme(currentTheme);
});
