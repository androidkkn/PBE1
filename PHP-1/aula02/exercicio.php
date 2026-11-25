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
$nome = 'Kauan';
$idade = 16;
$altura = 1.84;
$nativo = true;
$pais = ["pai" => "Rodrigo", "mae" => "Karla"];



echo "<b>Nome:</b> $nome<br>";
echo "<b>Idade:</b> $idade<br>";
echo "<b>Altura:</b> $altura<br>";
echo "<b>Nativo:</b>";
echo $nativo ? "Sim" : "Não";
echo "<br><b>Pais:</    b> {$pais['pai']}, {$pais['mae']}";

?>
</body>
</html>