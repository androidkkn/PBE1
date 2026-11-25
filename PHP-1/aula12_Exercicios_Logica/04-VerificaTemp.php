<!-- 4. Verificação de temperatura: Crie um programa que peça ao usuário para inserir uma temperatura e verifique se está frio, agradável ou quente. -->

<?php

//Explicar o que o programa faz: Esse programa pergunta ao usuarui a temperatura e diz se esta calor, frio ou se esta em uma temperatura agradavel
echo "Esse programa pergunta ao usuarui a temperatura e diz se esta calor, frio ou se esta em uma temperatura agradavel";

//pedir para o usuario digitar a temperatura
$temp = (float) readline("\nDigite a temperatura: ");

//Fazer a verificação da temperatura
//Se a temperatura tiver maior que 30°C dizer que esta calor
if ($temp >= 30) {
    echo "\nSlk q calor do CAO, vamo na piscina?";
}
//Se a temperatura tiver menor que 15°C dizer que esta frio
elseif ($temp < 15) {
    echo "\nesta very cold BB, marcha um filminho no sofa com um edredon?😏";
}
//Se a temperatura tiver entre 16°C e 29°C dizer que esta agradavel
elseif ($temp >= 16) {
    echo "\nA temperatura está agradavel, vamos dar uma volta?";
}


?>