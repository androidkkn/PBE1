<?php 

$senha = isset($_POST['senha']) ? (int)$_POST['senha'] : 0;
$atual = 0;

while ($atual != $senha){
    $atual ++;
};
echo "Sua senha é : $atual";
?>