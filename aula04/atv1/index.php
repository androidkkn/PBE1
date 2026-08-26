<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AT1</title>
</head>
<body>
    <h1>Equipe de RH</h1>
    <p>
        <b>Dados do contratado</b>
    </p>
    <?php
    // Variáveis com dados do funcionário
$nome = 'Kauan';
$idade = 16;
$altura = 1.84;
$peso = 76;
$nativo = true;
$pais = ["pai" => "Rodrigo", "mae" => "Karla"];

// Exibe os dados básicos do funcionário
echo "<b>Nome:</b> $nome<br>";
echo "<b>Idade:</b> $idade<br>";
echo "<b>Altura:</b> $altura m <br>";
echo "<b>Peso</b> $peso kg <br>";
// Concatena a string com uma comparação (se nativo é true mostra Sim, senão Não)
echo "<b>Nativo:</b>" . ($nativo ? "Sim" : "Não") . "<br>";
echo "<b>Pais:</b> {$pais['pai']}, {$pais['mae']}<br>";
?>

<p><b>Especificações do sistema</b></p>

<?php 
// Divide o peso pela altura ao quadrado e arredonda para 2 casas decimais
$imc = round($peso / ($altura ** 2), 2);

// Compara o IMC com valores para determinar a faixa (magreza, normal, sobrepeso ou obesidade)
$faixa_imc = ($imc < 18.5) ? "Magreza" : (($imc < 25) ? "Normal" : (($imc < 30) ? "Sobrepeso" : "Obesidade"));

// Exibe o resultado concatenando a string com o valor do IMC e sua faixa
echo "<b>IMC: </b>" . $imc . "<br>";
echo "<b>Faixa do IMC:</b>" . $faixa_imc . "<br>";



?>
</body>
</html>