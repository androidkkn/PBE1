<!-- 1. Verificação de idade: Crie um programa que peça ao usuário para inserir a sua idade e verifique se ele é menor de idade, adulto ou idoso. -->

<?php

//Dizer o que o PROGRAMA faz: Este programa classifica a faixa etária por idade.

/*Receber do usuário a idade*/
$idade = (int) readline("Digite a sua idade: ");

if ($idade < 21) {
    //Senao = Criança 
    echo "Você é menor de idade.\n";
} elseif ($idade < 65) {
    //Se senao a idade for maior que 21 = adulto
    echo "Você é adulto.\n";
} else {
    //Se idade for maior que 65 = idoso
    echo "Você é idoso.\n";
}
?>