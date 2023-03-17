<!--#1d2430-->
<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php include("css/styles.php") ?>
  <title>Jogo da Velha</title>
</head>

<body>

  <form class="border rounded form-tema">

    <br>
    <div class="div-tema">
      <h5>ESCOLHA UM TEMA</h5>
    </div>
    <div class="container">
      <div class="row checksize">

        <div class="col-sm-4">

          <div class="form-group form-check">
            <label class="container2">Coronavírus
              <input id="corona" type="checkbox">
              <span class="checkmark2 border"></span>
            </label>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group form-check">
            <label class="container2 ">Velhinhas
              <input type="checkbox" name="velhinhas"> <!-- onclick="Velhas()" -->
              <span class="checkmark2 border"></span>
            </label>

          </div>
        </div>
        <div class="col-sm-4">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <i class="fa fa-moon-o icon-white"></i>
              </div>
              <div class="col-sm-6">
                <div class="form-check form-switch">
                  <input id="toggle" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                  <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                  <i class="fa fa-sun-o icon-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
   
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <form class="form-style">
            <br>
            <div class="border-right">
              <h4 class="logstyle">Login</h4>

              <div class="form-group ml5" name="Login">

                <input type="name" class="form-control boxL" name="Nome" placeholder="Nome">

              </div>
              <div class="form-group ml5">

                <input type="password" class="form-control boxL" name="Senha" placeholder="Senha">
              </div>
              <button id="BtnEntrar" type="submit" class="btn btn-primary btn-enviar">Entrar</button>
              <br>
            </div>
          </form>

        </div>
        <div class="col-sm-6">
          <form class="form-style border-black rounded">
            <br>
            <h4 for="exampleInputEmail1" class="cadstyle">Cadastro</h4>
            <div class="form-group">
              <input type="name" class="form-control boxC" name="NomeCadastro" placeholder="Nome">
            </div>
            <div class="form-group">

              <input type="password" class="form-control boxC" name="Senha" placeholder="Senha">
            </div>
            <div class="form-group">
              <input type="password" class="form-control boxC" name="ConfirmaSenha" placeholder="Confirmar Senha">
            </div>

            <button id="BtnEnviar" class="btn btn-primary btn-enviar">Enviar</button>


            <br><br>
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>
  </form>
  <script type="text/javascript" src="../Js/index.js"></script>
  <script src="../Js/script.js"></script>
  <?php include("rodape.php") ?>