<?php include_once "cabecalho.php"?>

<h1>Ola Mundo</h1>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:50%; margin:100px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagem1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagem2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagem3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Proximo</span>
  </a>
</div>

<?php include_once "rodape.php"?>