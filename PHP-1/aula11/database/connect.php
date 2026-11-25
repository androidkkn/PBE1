<?php 
$host = "192.168.10.53";
$dbname = "estudos";
$user = "estudos";
$pass = "kk";

try {
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
    );
    echo "Conexão realizada com sucesso!<br>";
} catch (PDOException $e){
    echo "Erro: ". $e->getMessage();
}
?>