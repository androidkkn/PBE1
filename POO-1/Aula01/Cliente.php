<?php

class Cliente
{
    //atributos:
    private string $nome;
    private int $idade;
    private float $peso;

    public function __construct(string $nome, int $idade, float $peso)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->cadastrar();
    }

    public function cadastrar(){
        echo "Cliente {$this->nome} cadastrado com sucesso!\n";

    }
    public function mostrarDados()
    {
        echo $this->nome . "\n";
        echo $this->idade . "\n";
        echo $this->peso . "\n";
    }
}


