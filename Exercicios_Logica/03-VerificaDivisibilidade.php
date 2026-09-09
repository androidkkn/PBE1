<!-- 3. Verificação de divisibilidade: Crie um programa que peça ao usuário para inserir dois números e verifique se o primeiro número é divisível pelo segundo. -->

<?php

//Apresentar o programa dizendo o que ele faz: Este programa verifica se o número inserido é divisivel pelo segundo número.

echo "Este programa verifica se o número inserido é divisivel pelo segundo número.";

//perguntar quais são os dois numeros
echo "\nDigite dois numeros interios";
$num1 = (int) readline("\nDigite o primeiro número: ");
$num2 = (int) readline("\nDigite o segundo número: ");

//Fazer a comparação se o numero 1 e divisivel pelo numero 2
if ($num1 % $num2 == 0) {
    //Se numero 1 for divisivel pelo numero 2 mostrar "num1 e divisivel por num2"
    echo "\n$num1 é divisivel por $num2";
} else {
    //Se nao mostrar num1 nao e divisivel por num2
    echo "\n$num1 não é divisivel por $num2";
};



?>