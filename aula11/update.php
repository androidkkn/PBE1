<?php 

require_once __DIR__ . '/collect.php    ';

$n_nome = 'Wagner';
$id = 4;
$sql = "UPDATE alunos SET nome = :nome WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":nome",$n_nome);
$stmt->bindParam(":id", $id);
$stmt->execute();

?>