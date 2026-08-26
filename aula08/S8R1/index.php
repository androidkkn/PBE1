<?php

// Função para mostrar uma mensagem de boas-vindas
function BemVindo($nome)
{
    echo "Seja bem vindo ao meu site, Sr(a) $nome";
};

// Função para verificar se a pessoa é maior ou menor de idade
function VerificaIdade($i)
{
    // Se a idade for 18 ou mais, entra aqui
    if ($i >= 18) {
        // Devolve a mensagem de maior de idade
        return "Voçe e um usuario MAIOR de idade";
    } else {
        // Se não for 18 ou mais, entra aqui
        // Devolve a mensagem de menor de idade
        return "Voçe e um usuario MENOR de idade";
    }
};

function menu()
{
    // Chama a função de boas-vindas com o nome "Kauan"
    BemVindo("Kauan");

    echo "<hr>";

    // Chama a função VerificaIdade com o valor 11 e 12
    // e mostra o resultado na tela
    echo VerificaIdade(11);
    echo "<br>";
    echo VerificaIdade(22);
};
// Mostra na tela o resultado das duas funções
menu();