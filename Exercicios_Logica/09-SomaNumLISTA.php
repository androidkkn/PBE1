<!-- 9. Soma dos números em uma lista: Crie um programa que some todos os números em uma lista. -->

<?php

//explicação do programa: O programa pede para o usuario digitar em uma lista numeros inteiros e o programa ira somar esses numeros
echo "O programa pede para o usuario digitar em uma lista numeros inteiros e o programa ira somar esses numeros\n";

//criar uma lista
$lista = [];
//receber valores do usuario até digitar 0
do {
    //enquanto o usuario nao digitar 0, receber e adicionar a lista 
    $usuario = (float) readline("\nInsira um valor ou pressione enter para sair: ");
    array_push($lista, $usuario);
    //se o usuario digitou enter
} while (!empty($usuario));
//exibir a lista
print_r($lista);

//somar a lista
//mostrar o resultado da soma
echo "\nA soma dos valores: " . array_sum($lista);

?>