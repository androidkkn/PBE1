<?php

// Define uma mensagem padrão com cupom de desconto
$mensagem = "Bem-vindo ao nosso sistema! Seu cupom de desconto é '@2026'";

// Loop que repete 5 vezes (de 1 a 5)
for ($i = 1; $i <= 5; $i++) {
    // Verifica se a iteração atual é a número 3
    if ($i == 3) {
        // Se for a 3ª mensagem, adiciona "[VIP]" e "com frete grátis!"
        echo "Mensagem " . $i . ": [VIP] " . $mensagem . " (com frete grátis!) <br>";
    } else {
        // Caso contrário, exibe a mensagem padrão sem adições
        echo "Mensagem " . $i . ":" . $mensagem  . " <br>";
    }
}
