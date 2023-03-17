<?php include("cabecalho.php") ?>


<div class="rounded-top form-tema-one">
  <br>
  <p class="p1">Salas</p>
  <div>
  </div>

</div>
<div class="form-tema-one" style=" margin-top:0%; background-color: hsla(0, 0%, 0%, 0.7)">
  <br>
  <div id="scrollbar2" class="form-tema-two">
    <table class="table table-hover table-dark style rounded-top">
      <tbody style="background-color:  hsla(0, 0%, 100%, 0.04)">
        <tr onclick="location.href = 'telajogo.php';">
          <th scope="row"></th>
          <td>Mark</td>
          <td></td>
          <td><span id="disp"></span>/2</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="rounded-bottom form-tema-one" style="margin-right:0%; margin-top:0%;">
  <br>
  <div class="conteiner">
    <div class="row">
      <div class="col-sm-4">
        <input type="name" class="form-control box" id="name" placeholder="Nome da sala" style="margin-left:10%; width:100%">
      </div>
      <div class="col-sm-4">
        <a href="telajogo.php"><button type="submit" class="btn btn-primary btn-enviar2"> Criar Sala</button></a>
      </div>
    </div>
  </div>
  <br>
</div>
<br>

<?php include("rodape.php") ?>