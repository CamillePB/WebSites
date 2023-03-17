<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="POST">
Nome: <input type="text" name="nome">
<br>Idade: <input type="text" name="idade">
<br>cpf: <input type="text" name="idade">
        <br>sadsd:
        <input type="checkbox" name="info"><label>Deseja receber informações?</label>
        <input id="enviar"type="submit">
</form>
</body>
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