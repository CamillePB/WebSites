<?php include_once "cabecalho.php";

if(isset($_REQUEST["acao"])) {
  if($_REQUEST["acao"]=="excluir") {
    $sql = "DELETE FROM tb01_alunos WHERE tb01_rm = '{$_REQUEST["rm"]}'";
    $dados = $banco->exec($sql);
  } elseif($_REQUEST["acao"]=="incluir") {
    $sql = "INSERT INTO tb01_alunos (tb01_rm, tb01_nome) VALUES ('{$_REQUEST["rm"]}', '{$_REQUEST["nome"]}')";
    $dados = $banco->exec($sql);
  }
}
?>

  <div class="container">
        <div class="row">
      <div class="col-sm-6">
          <div style="margin-top:10%">
<h3 style="margin:5px">Listagem dos alunos</h3>
 <div class="form-tema-one border">
<table class="table table-striped" style="width: 100%; margin-bottom:0px">
  <thead>
    <tr>
      <th scope="col" style="width: 38%">RM</th>
      <th scope="col" style="width: 40%">Nome do Aluno</th>
      <th scope="col"></th>
    </tr>
  </thead>
  </table>
  <div class="form-tema data-table" id="scrollbar">
  <table class="table table-striped" style="width: 100%">
  <tbody>
<?php
    $sql = "SELECT * FROM tb01_alunos ORDER BY tb01_nome";
    $dados = $banco->query($sql);

    foreach ($dados as $registro) {
        echo "<tr>
            <td>{$registro["tb01_rm"]}</td>
            <td>{$registro["tb01_nome"]}</td>
            <td><a href='aluno.php?acao=excluir&rm={$registro["tb01_rm"]}&nome={$registro["tb01_nome"]}' class='btn btn-danger'>Excluir</a></td>
        </tr>";
    }
?>

  </table>
</div>
</div>
</div>
</div>
<div class="col-sm-6">
    <div style="margin-top:30%; margin-left:10%">
<h3 style="margin-left:5px; margin-top: 0px">Novo cadastro</h3>
<form class="form-tema-one" action="aluno.php" style="width: 80%; margin-bottom: 0%">
  <input type="hidden" name="acao" value="incluir">
  <div class="form-group" style="margin-top: 15px">
    <input type="number" class="form-control" name="rm" id="rm" placeholder="RM (Registro de Matricula)" required>
  </div>
  <div class="form-group" style="margin-top: 30px">
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome"required>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-top: 5px">Enviar</button>
</form>
</div>
</div>
</div>
</div>
<?php include_once "rodape.php"?>