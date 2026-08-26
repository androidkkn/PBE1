<?php 

$alunos = ["Timas", "Nícolas", "Kauan"];

for($i=0; $i<count($alunos); $i++){
    echo "Aluno: $alunos[$i]<br>";
};  

echo "<hr>";
foreach($alunos as $a){
    echo "Aluno $a <br>";
};

$profissoes = [
    ["Jorge", 29, "Instrutor"],
    ["Denadai", 33, "Instrutor"]
];
echo "<hr>";
foreach($profissoes as $p){
    echo "Nome: $p[0] Idade: $p[1], Cargo: $p[2]<br>";
};
?>