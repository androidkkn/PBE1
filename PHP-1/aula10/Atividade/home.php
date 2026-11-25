<?php
// Inicia a sessão para guardar os dados do usuário entre as páginas.
session_start();

// Executa este bloco somente quando o formulário for enviado via POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Guarda o nome e o cargo na sessão. O operador ?? evita erro se o campo não existir.
    $_SESSION['user'] = $_POST['nome'] ?? '';
    $_SESSION['cargo'] = $_POST['cargo'] ?? '';

    // Cria o cookie por uma hora quando o nome foi preenchido.
    if ($_SESSION['user'] !== '') {
        setcookie('nome', $_SESSION['user'], time() + 3600, '/');

        // Permite que o header use o cookie imediatamente nesta requisição.
        $_COOKIE['nome'] = $_SESSION['user'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define a codificação e o ajuste da página para telas menores. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>

    <?php
    // Inclui o header compartilhado da atividade.
    include 'header.php';

    // Exibe os dados salvos na sessão.
    echo "O seu nome é " . ($_SESSION['user'] ?? '');
    echo "<br>";
    echo "O seu cargo é " . ($_SESSION['cargo'] ?? '');
    ?>
</body>
</html>