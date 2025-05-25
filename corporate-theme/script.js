const whatsappButton = document.getElementById('whatsappBtn');
whatsappButton.addEventListener('click', function () {
  window.open('https://web.whatsapp.com/', '_blank');
});

const body = document.body;
const themeToggle = document.querySelector('.theme-toggle');

function setTheme(dark) {
  if (dark) {
    body.classList.add('dark-mode');
    themeToggle.innerHTML = '&#9788;';
  } else {
    body.classList.remove('dark-mode');
    themeToggle.innerHTML = '&#9790;';
  }
  localStorage.setItem('theme', dark ? 'dark' : 'light');
}

(function () {
  const savedTheme = localStorage.getItem('theme');
  const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
  if (savedTheme === 'dark') {
    setTheme(true);
  } else if (savedTheme === 'light') {
    setTheme(false);
  } else {
    setTheme(prefersDark);
  }
})();

themeToggle.addEventListener('click', function () {
  setTheme(!body.classList.contains('dark-mode'));
});
