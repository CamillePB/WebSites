
<html>
<title> New page </title>

<body>
    <form method="POST" style="margin:10px 0 0 700px;">

        <label>digite seu nome</label>
        <input type="text" name="nomeTXT">
        <label>digite sua senha</label>
        <input type="password" name="senhaTXT">
        <input id="enviar"type="submit"> 
    </form>

<form method="POST">
        <h1>Calculadora:</h1>
   
       <div class="form-group" style="color: coral; margin: 0px 0px 10px 70px; width:50%">
        <label>valor 1:</label>
        <input type="text" name="val1TXT">
        </div>
        <div class="form-group" style="color: coral; margin: 0px 0px 10px 70px; width:50%">
        <label>valor 2:</label>
        <input type="text" name="val2TXT">
        </div>
        <div class="form-group" style="color: coral; margin: 0px 0px 10px 70px; width:50%">
        <input id="enviar"type="submit">  </div>
</form>

</body>
<?php 
         if(isset ($_POST["nomeTXT"])){
            if($_POST["nomeTXT"]=="carlos" && $_POST["senhaTXT"]=="123"){
                echo"Seja Bem-vindo";
            }else{echo"Usuario invalido";}
            }

            if(isset($_POST["val1TXT"]) and $_POST["val1TXT"]>=1){

                $n1=$_POST["val1TXT"];
                $n2=$_POST["val2TXT"];
                $soma= $n1 + $n2;
                echo "Soma: $n1 + $n2 = $soma";

            }else{ echo "Soma: ";
            }

            echo "<table border='1'>";
        for($i=0; $i<=10; $i++){
            if(isset($_POST["val1TXT"]) and $_POST["val1TXT"]>=1){
                echo"<tr><td>$soma x $i = </td><td>". ($soma*$i). "</td></tr>";
            }else{echo "";}
            }
            echo "</table>";
    ?>
</html>
