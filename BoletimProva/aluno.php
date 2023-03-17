<?php include_once "cabecalho.php";

if(isset($_REQUEST["acao"])) {
  if($_REQUEST["acao"]=="excluir") {
    $sql = "DELETE FROM tb01_alunos WHERE tb01_rm = '{$_REQUEST["rm"]}'";
    $dados = $banco->exec($sql);
  } elseif($_REQUEST["acao"]=="incluir") {
    $sql = "INSERT INTO tb01_alunos (tb01_rm, tb01_nome, tb01_email) VALUES ('{$_REQUEST["rm"]}', '{$_REQUEST["nome"]}', '{$_REQUEST["email"]}')";
    $dados = $banco->exec($sql);
  }
}
?>

<div class="container">
        <div class="row">
      <div class="col-sm-8">
          <div style="margin-top:10%">
<h3 style="margin:5px">Listagem dos alunos</h3>
 <div class="form-tema-one border">
  <div class="form-tema data-table" id="scrollbar">
 
<?php
    $sql = "SELECT * FROM tb01_alunos ORDER BY tb01_nome";
    $dados = $banco->query($sql);

    foreach ($dados as $registro) {
        echo "<div class='media' style='margin: 15px'>
        <img src='https://api.adorable.io/avatars/98/abott@adorable.png' class='mr-3 border-radius' alt=''>
        <div class='media-body'>
          <h5 class='mt-0'>{$registro["tb01_nome"]}</h5>
          <p>{$registro["tb01_rm"]}</p>
          {$registro["tb01_email"]}
          </div>
      </div>";
    }
?>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
    <div style="margin-top:50%; margin-left:10%">
<h3 style="margin-left:5px; mangin-top: 0px">Novo cadastro</h3>
<form class="form-tema-one" action="aluno.php" style="width: 100%; margin-bottom: 0%">
  <input type="hidden" name="acao" value="incluir">
  <div class="form-group" style="margin-top: 15px">
    <input type="number" class="form-control" name="rm" id="rm" placeholder="RM (Registro de Matricula)" required>
  </div>
  <div class="form-group" style="margin-top: 30px">
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome"required>
  </div>
  <div class="form-group" style="margin-top: 30px">
    <input type="text" class="form-control" name="email" id="email" placeholder="Email"required>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-top: 5px">Enviar</button>
</form>
</div>
</div>
</div>
</div>
<?php include_once "rodape.php"?>