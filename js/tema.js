const themeMap = {
  dark: "light",
  light: "solar",
  solar: "dark"
};

const theme = localStorage.getItem('theme')
  || (tmp = Object.keys(themeMap)[0],
      localStorage.setItem('theme', tmp),
      tmp);
const bodyClass = document.body.classList;
bodyClass.add(theme);

function toggleTheme() {
  const current = localStorage.getItem('theme');
  const next = themeMap[current];

  bodyClass.replace(current, next);
  localStorage.setItem('theme', next);
}

document.getElementById('themeButton').onclick = toggleTheme;
 
function updateIconsForTheme(theme) {
  const icons = document.querySelectorAll('.img1');

  icons.forEach(icon => {
    const iconName = icon.getAttribute('data-icon');
    let colorCode;

    switch (theme) {
      case 'dark':
        colorCode = 'ffffff'; // branco
        break;
      case 'light':
        colorCode = '000000'; // preto
        break;
      case 'solar':
        colorCode = 'f7c600'; // amarelo solar (ou qualquer outro)
        break;
      default:
        colorCode = '000000';
    }

    icon.src = `https://img.icons8.com/fluency/48/${colorCode}/${iconName}.png`;
  });
}

document.querySelector("#tema-toggle").addEventListener("click", () => {
  const body = document.body;
  const current = body.dataset.theme;

  let newTheme = current === 'dark' ? 'light' : current === 'light' ? 'solar' : 'dark';
  body.dataset.theme = newTheme;
  updateIconsForTheme(newTheme); // AQUI ENTRA A FUNÇÃO
});

