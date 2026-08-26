<?php 
// Cria um array chamado funcionarios com vários funcionários dentro
$funcionarios = [
    // Cada item do array é outro array com nome, idade e cargo
    ["Kauan", 16 , "TI"],
    ["JW", 17, "Elétrica"],
    ["Cassio", 16, "Administração"],
    ["Gazola", 16, "RH"]
];

// Percorre cada funcionário dentro do array
foreach($funcionarios as $f){
    // Exibe os dados do funcionário atual na tela
    // $f[0] = nome, $f[1] = idade, $f[2] = cargo
    echo "Nome: $f[0]; Idade: $f[1]; Cargo: $f[2]<br><hr>";
}
?>