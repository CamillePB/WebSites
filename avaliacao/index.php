<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Avaliação PW1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>

    <form>
        <h3>Dados Pessoais</h3>
        Nome completo: <input type="text" name="nomecompleto">
        <br>Idade: <input type="text" name="idade">
        <br>Gênero de filmes que mais gosta: <select>
            <option>Nenhuma específica</option>
            <option>Animação</option>
            <option>Aventura</option>
            <option>Romance</option>
            <option>Drama</option>
        </select>
        <h3>Enquete</h3>
        Você assiste filmes e séries pela internet, em sites não oficiais?
        <input type="radio" name="enquete" value="uso">Sim
        <input type="radio" name="enquete" value="não uso">Não
        <p><input type="submit" value="Responder Questionário"></p>
    </form>
</body>
</html>