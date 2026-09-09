<!-- 6. Impressão dos números de 1 a 10: Crie um programa que imprima os números de 1 a 10. -->

<?php

//Explicação do programa: Esse programa vai imprimir os numeros de 1 a 10

echo "Esse programa vai imprimir os numeros de 1 a 10";

//listar os numeros de 1 a 10
$contagem = (int)readline("\nDigite o numero que sera contado por ultimo: ");
for ($i = 1; $i <= $contagem; $i++) {
    echo "\n$i";
}

?>