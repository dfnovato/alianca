const themeMap = {
  dark: "light",
  light: "solar",
  solar: "dark"
};

// 1. Inicialização do Tema
const theme = localStorage.getItem('theme') || "dark";
document.body.classList.add(theme);
document.body.dataset.theme = theme; // Mantém o dataset em sincronia

// 2. Função para atualizar os ícones da Icons8
function updateIconsForTheme(currentTheme) {
  const icons = document.querySelectorAll('.img1');
  icons.forEach(icon => {
    const iconName = icon.getAttribute('data-icon');
    if (!iconName) return; // Pula se não tiver o atributo

    let colorCode;
    switch (currentTheme) {
      case 'dark': colorCode = 'ffffff'; break;
      case 'light': colorCode = '000000'; break;
      case 'solar': colorCode = 'f7c600'; break;
      default: colorCode = '000000';
    }
    icon.src = `https://img.icons8.com/fluency/48/${colorCode}/${iconName}.png`;
  });
}

// Executa uma vez ao carregar para garantir que os ícones batam com o tema salvo
updateIconsForTheme(theme);

// 3. Lógica de Troca (Toggle)
function toggleTheme() {
  const current = localStorage.getItem('theme') || "dark";
  const next = themeMap[current];

  // Atualiza Classes, Dataset e LocalStorage
  document.body.classList.replace(current, next);
  document.body.dataset.theme = next;
  localStorage.setItem('theme', next);
  
  // Atualiza os ícones
  updateIconsForTheme(next);
}

// 4. PROTEÇÃO CONTRA O ERRO "NULL" (A LINHA 49)
// Tentamos encontrar os dois botões possíveis (o antigo e o novo)
const btn1 = document.getElementById('themeButton');
const btn2 = document.querySelector("#tema-toggle");

if (btn1) {
  btn1.onclick = toggleTheme;
}

if (btn2) {
  btn2.addEventListener("click", toggleTheme);
}