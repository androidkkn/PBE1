<?php
//Chamando o arquivo Cliente.php como requerimento para a pagina carregar
require_once __DIR__ . '/Cliente.php';
// metodo Contrutor
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c1 = new Cliente($_POST['nome'], $_POST['idade'], $_POST['peso']);
    $c1->mostrarDados();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>

<body>
    <form method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="idade">idade: </label>
        <input type="number" name="idade" id="idade">
        <br>
        <label for="peso">Peso: </label>
        <input type="number" 
        name="peso" id="peso" step="0.01" placeholder="0,00">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>