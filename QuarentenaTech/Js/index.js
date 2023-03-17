var BtnEnviar = document.getElementById("BtnEnviar");
    BtnEnviar.onclick = verifica;
    var url = "telajogo.php";
    var BtnEntrar = document.querySelector("#BtnEntrar");

    function openInNewTab(url) {
      var win = window.open(url, '_blank'); //abrir nova guia
      win.focus();
    }

    BtnEntrar.addEventListener('click', function() {
      openInNewTab(url);
    });

    function verifica() { // mensagem de confirmação

      if (verifica = true) {
        alert("Cadastrado com sucesso");
      }

    }

