<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Define a codificação e o ajuste da página para telas menores. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>

    <?php
    // Reutiliza o header nesta página.
    include 'header.php';
    ?>
    <main>
        <!-- Envia os dados preenchidos para home.php usando o método POST. -->
        <form action="home.php" method="POST">
            <h1>Digite as credenciais pedidas a baixo para logar</h1>

            <!-- Campo para informar o nome do usuário. -->
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
            <br>

            <!-- Campo para informar o cargo do usuário. -->
            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" id="cargo">
            <br>

            <!-- Envia o formulário. -->
            <input type="submit" value="Entrar">
        </form>
    </main>
</body>
</html>