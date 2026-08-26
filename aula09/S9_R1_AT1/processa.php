
<?php 

// Verifica se o formulário foi enviado com o nome preenchido.
if (isset($_POST["nome"])) {
    // Exibe os dados recebidos do formulário.
    echo "Seu nome é : " . $_POST["nome"] . "<br>";
    echo "Seu Telefone é : " . $_POST["tel"] . "<br>";
    echo "Seu email é : " . $_POST["email"] . "<br>";
    echo "Seu CPF é : " . $_POST["CPF"] . "<br>";
}
?>