<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php include("css/styles.php") ?>
  <script src="../Js/script.js"></script>
  <title>Jogo da Velha</title>
</head>

<body>

  <nav class="navbar navbar-expand main-nav">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-cor ml20" href="telasalas.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-cor ml60p" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Temas
          </a>
          <div class="dropdown-menu drop-tema" aria-labelledby="navbarDropdown">
            <form>
              <label class="container2">Coronavírus
                <input type="checkbox" href="#">
                <span class="checkmark2 border"></span>
              </label>
            </form>
            <form>
              <label class="container2">Velhinhas
                <input type="checkbox" href="#">
                <span class="checkmark2 border"></span>
              </label>
            </form>

            <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <i class="fa fa-moon-o icon-white"></i>
              </div>
              <div class="col-sm-1">
                <div class="form-check form-switch">
                  <input id="toggle" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                  <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                  
                </div>
              </div>
              <div class="col-sm-3">
              <i class="fa fa-sun-o icon-white"></i>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-cor ml60p" href="telarank.php">Rank<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-cor ml900p" href="inicial.php">Sair<span class="sr-only">(current)</span></a>
        </li>
      </ul>

    </div>
  </nav>
