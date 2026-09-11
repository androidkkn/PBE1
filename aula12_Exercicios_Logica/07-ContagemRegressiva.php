<!-- 7. Contagem regressiva: Crie um programa que faça uma contagem regressiva de 10 até 1. -->

<?php

//Explicação do programa: O programa faz  uma contagem regressiva de 10 até 1.

$contagem = (int)readline("Digite o numero que ira se iniciar a contagem até 0: ");

//Imprimir a contagem na tela
for ($i = $contagem; $i > 0; $i--) {
    echo "\n$i";
    sleep(1);
};

echo "\n🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩";

?>