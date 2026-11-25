<?php 
session_start();
echo "Seja bem vindo " . $_SESSION["user"];
?>
<br><a href="index.php">Voltar</a>