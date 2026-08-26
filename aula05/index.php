<?php 

$TempoDeEmpresa = 4; //tempo da empresa em anos
$setor = 7; // numero do setor que quero entrar
$funcionarios = 200; // número de funcionários da empresa

echo "<h1>Emrpesa de E-commerce</h1>";

// Switch verifica o valor de $setor e executa um bloco diferente para cada caso
// break interrompe o switch, default valida valores inválidos
switch ($setor) { 
    case 1 :{
        echo "<h1>Setor de Roupas</h1>";
        break;
    };

    case 2 :{
        echo "<h1>Setor de Comidas</h1>";
        break;
    };

    case 3 :{
        echo "<h1>Setor Tech</h1>";
        break;
    };

    case 4 :{
        echo "<h1>Setor de Brinquedos</h1>";
        break;
    };

    case 5 :{
        echo "<h1>Setor de Eletrodomesticos</h1>";
        break;
    };
        
    default: echo "<h1>Setor Invalido</h1>";
    break;
}

// If/elseif/else testa múltiplas condições em ordem até encontrar uma verdadeira
// && significa AND (ambas as condições precisam ser verdadeiras)
if ($funcionarios >= 300 && $TempoDeEmpresa >= 4) {
    echo "<h1>Empresa de grande porte</h1>";
} elseif ($funcionarios >= 200 && $TempoDeEmpresa >= 2) {
    echo "<h1>Empresa de médio porte</h1>";
} elseif ($funcionarios >= 100 && $TempoDeEmpresa >= 1) {
    echo "<h1>Empresa de pequeno porte</h1>";
} else {
    echo "<h1>Empresa não atinge os critérios mínimos</h1>";
}
?>