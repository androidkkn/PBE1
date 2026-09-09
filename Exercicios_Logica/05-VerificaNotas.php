<!-- 5. Verificação de notas: Crie um programa que peça ao usuário para inserir sua nota em uma prova e imprima se ele foi aprovado ou reprovado (considerando que a nota mínima para aprovação é 7). -->

<?php

//Explicar o que o programa faz: O programa vai pedir ao usuario para ele inserir a nota da prova e vai imprimir se ele foi aprovado ou reprovado(a media é 7)
echo "O programa pede a nota da prova e vai imprimir se ele foi aprovado ou reprovado(a media é 7)\n";
//pedir ao usurio para que ele digite a nota
$nota = (float) readline("\nDigite a sua nota: ");
//verificar a nota e se ela for menor que 7 ele esta reprovado

if ($nota>0 && $nota<10){
    if ($nota >= 7 && $nota<=10) {
    echo "\nParabens voce esta aprovado";
}
//caso ele tirar 7 ou mais ele esta reprovado
else {
    echo "\nMuy hugo vc foi reprovado";
}
} else{
    echo "NOTA INVALIDA";
}


?>