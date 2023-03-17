<?php
 
require_once "cabecalho.php";
 
if(isset($_REQUEST["acao"])) {
  if($_REQUEST["acao"]=="excluir") {
    $sql = "DELETE FROM tb02_mencoes WHERE tb02_codigo = '{$_REQUEST["codigo"]}'";
    $dados = $banco->exec($sql);
  } elseif($_REQUEST["acao"]=="incluir") {
    $sql = "INSERT INTO tb02_mencoes (tb02_rm, tb02_componente, tb02_mencao) VALUES ('{$_REQUEST["rm"]}', '{$_REQUEST["componente"]}', '{$_REQUEST["mencao"]}')";
    $dados = $banco->exec($sql);
  } elseif($_REQUEST["acao"]=="selecionar") {
    $sql = "SELECT * FROM tb01_alunos WHERE tb01_rm = {$_REQUEST["rm"]}";
    $aluno = $banco->query($sql);
  }
}
?>
 
<?php if(!isset($_REQUEST["rm"])) { ?>
          <div style="margin-top:3%; margin-left:10%;  width: 80%">
<h3 style="margin:5px">Escolha um Aluno:</h3>
 <div class="form-tema-one border">
<table class="table table-striped" style="margin-bottom:0px">
  <thead>
    <tr>
      <th scope="col">RM</th>
      <th scope="col">Nome do Aluno</th>
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
            <td><a href='mencoes.php?acao=selecionar&rm={$registro["tb01_rm"]}' class='btn btn-link'>{$registro["tb01_nome"]}</a></td>
            <td><a href='mencoes.php?acao=selecionar&rm={$registro["tb01_rm"]}' class='btn btn-info'>Selecionar</a></td>
        </tr>";
    }
?>
  </tbody>
</table>
</div>
</div>
</div>

<?php } else { ?>
 
<a href='mencoes.php?' class='btn btn-secondary' style="margin:1%">Voltar</a>
<div class="container">
        <div class="row">
      <div class="col-sm-6">

<h3 style="margin:5px">Componentes registrados:</h3>
 <div class="form-tema-one">
<table class="table table-striped border" style="margin-bottom:0%; width: 100%">
  <thead>
    <tr>
      <th scope="col">Componente</th>
      <th scope="col">Menção</th>
    </tr>
  </thead>
  </table>
  <div class="form-tema-three data-table"  id="scrollbar2">
  <table class="table table-striped border" style="width: 100%; margin-bottom: 0%">
  <tbody>
<?php
    $sql = "SELECT * FROM tb02_mencoes WHERE tb02_rm = {$_REQUEST["rm"]} ORDER BY tb02_componente";
    $dados = $banco->query($sql);
 
    foreach ($dados as $registro) {
        echo "<tr>
            <td>{$registro["tb02_componente"]}</td>
            <td>{$registro["tb02_mencao"]}</td>
            <td><a href='mencoes.php?acao=excluir&rm={$registro["tb02_rm"]}&codigo={$registro["tb02_codigo"]}' class='btn btn-danger'>Excluir</a></td>
        </tr>";
    }
?>
</table>
</div>
</div>
</div>

<div class="col-sm-6">
    <div style="margin-left:10%">
<h3>Nova Menção</h3>
<form action="mencoes.php">
  <input type="hidden" name="acao" value="incluir">
  <div class="form-group">
    <label for="rm">RM (Registro de Matricula)</label>
    <input type="number" class="form-control" name="rm" id="rm" value="<?php echo $_REQUEST["rm"]; ?>" readonly>
  </div>
  <div class="form-group">
    <label for="componente">Componente</label>
    <input type="text" class="form-control" name="componente" id="componente" required>
  </div>
  <div class="form-group">
    <label for="mencao">Menção</label>
    <input type="text" class="form-control" name="mencao" id="mencao" required>
  </div>
  <button type="submit" class="btn btn-primary">Gravar</button>
</form>
</div>
</div>
</div>
</div>
<?php } ?>
 
<?php
require_once "rodape.php";
 
?>