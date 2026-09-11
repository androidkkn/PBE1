<!-- 8. Tabuada de um número: Crie um programa que peça ao usuário para inserir um número e imprima a tabuada desse número. -->

<?php

// Explicar o codigo: O programa pede ao usuario para que ele digite um numero e ele ira responder com a tabuada desse numero
echo "O programa pede ao usuario para que ele digite um numero e ele ira responder com a tabuada desse numero\n";

// pedir para o usuario inserir o numero
$num = (int) readline("\nDigite o numero que voce quer saber a tabuada: ");

$num_i = (int) readline("\nDigite até que numero voce quer que ele seja multiplicado na tabuada: ");
echo "a tabuada é";
for ($i = 0; $i <= $num_i; $i++) {
    $resultado = $num * $i;
    echo "\n$num x $i = $resultado";
}


?>