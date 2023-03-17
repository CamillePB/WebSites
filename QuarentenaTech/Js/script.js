const toggle = document.getElementById("toggle");
const theme = window.localStorage.getItem("theme");

/* verifica se o tema armazenado no localStorage é escuro
se sim aplica o tema escuro ao body */
if (theme === "dark") document.body.classList.add("dark");

// event listener para quando o botão de alterar o tema for clicado
toggle.addEventListener("click", () => {
  document.body.classList.toggle("dark");
  
});

refresh.addEventListener("click", () => {
  window.location.reload();
});