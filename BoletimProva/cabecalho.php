<?php require_once("conexao.php");?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Boletim</title>

    <style>
        #scrollbar{
overflow-y: scroll;
height:372px;
width:100%;
}
#scrollbar2{
overflow-y: scroll;
height:190px;
width:100%;
}

.form-tema{
    margin-left: 0%;  
    width: 100% ; 
    height: 100%;
}
.form-tema-one{
    margin-top: 2%; 
    width: 100% ; 
    height: 40%;
}
.form-tema-three{
    margin-top: 0%; 
    width: 70% ; 
    height: 40%;
}
    </style>
  </head>
  <body >
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" style="margin-left: 1%">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li style="margin-left: 5%">
        <a class="nav-link" href="aluno.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-left: 20%">
          Alunos
        </a>
        </li>
        <li style="margin-left: 5%">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-left: 20%">
          Professores
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mencoes.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-left: 40%">
        Menções</a>
      </li>
    </ul>
    
  </div>
</nav>