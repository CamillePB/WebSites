<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
</head>
<body>
<h1>Insira suas informações:</h1>
<form method="POST">
<h2>Candidato</h2>

<label>Nome:</label>
<input type="name" name="nome">

<label>Email:</label>
<input type="text" name="email">

<label>Curso:</label>
<select type="text" name="curso">
<option>Informática</option>
<option>Marketing</option>
<option>Administração</option>
<option>Eventos</option>
<option>Recursos Humanos</option>
</select>
 

<br><br>

<input type="checkbox" name="info"><label>Deseja receber informações?</label>

<br><br>
<input id="enviar"type="submit">
</form>
</body>
<br>
<?php 
         if(isset ($_POST["nome"])){
            
                echo"  <br>Inscrição bem sucedida";
                echo"  <br>Nome: ".$_POST["nome"];
            }
            
            echo "<table border='1'>";
            if(isset ($_POST["info"])){
                echo"  <br>ChackBox: Sim";

            }
          
            else{ echo"  <br>ChackBox: Não";}

            echo"</table>";
            ?>
</html>