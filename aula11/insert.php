<?php
require_once __DIR__ . '/conect.php';

$sql = "INSERT INTO alunos (nome, turma, nasc, ativo, email)
VALUES (:nome, :turma, :nasc, :ativo, :email)";
try {
$stmt = $conexao->prepare($sql);
$stmt->bindValue(":nome", "Kauan");
$stmt->bindValue(":turma", "I1D46A");
$stmt->bindValue(":nasc", "2010-04-29");
$stmt->bindValue(":ativo", true, PDO::PARAM_BOOL);
$stmt->bindValue(":email", "kauan.andradeg2010@gmail.com");

$stmt->execute();
echo "Aluno inserido com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao inserir aluno: " . $e->getMessage();
}