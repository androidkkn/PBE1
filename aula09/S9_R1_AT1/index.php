<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Apresenta a empresa ao visitante. -->
    <h1>Seja bem vindo a empresa NEXUS</h1>

    <!-- Informa ao usuário que ele deve preencher o cadastro. -->
    <p><b>Faça o seu Cadastro logo abaixo</b></p>

    <!-- Envia os dados preenchidos para o arquivo que faz o processamento. -->
    <form action="processa.php" method="post">
        <!-- Campo para informar o nome do usuário. -->
        <label for="nome">Nome :</label>
        <input type="text" name="nome" id="nome">
        <br>

        <!-- Campo para informar o telefone do usuário. -->
        <label for="tel">Telefone</label>
        <input type="number" name="tel" id="tel">
        <br>

        <!-- Campo para informar o e-mail do usuário. -->
        <label for="email">Email :</label>
        <input type="email" name="email" id="email">
        <br>

        <!-- Campo para informar o CPF do usuário. -->
        <label for="CPF">CPF :</label>
        <input type="text" name="CPF" id="CPF">
        <br>

        <!-- Botão que envia o cadastro. -->
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>