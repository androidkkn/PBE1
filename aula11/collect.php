<?php
require_once __DIR__ . '/conect.php';

$sql = "SELECT * FROM alunos";

try{

$stmt = $conexao->prepare($sql);
$stmt->execute();

$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($alunos as $aluno) {
    echo "ID: {$aluno['id']}<br>";
    echo "Nome: {$aluno['nome']}<br>";
    echo "Turma: {$aluno['turma']}<br>";
    echo "Nascimento: {$aluno['nasc']}<br>";
    echo "Email: {$aluno['email']}<br>";
    echo "Ativo: {$aluno['ativo']}<br>";
}
} catch (PDOException $e){
    echo "Erro: ". $e->getMessage();
}

?>