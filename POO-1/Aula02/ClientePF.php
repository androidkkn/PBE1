<?php
require_once 'Cliente.php';
class ClientePF extends Cliente{
    private string $cpf;

    public function __construct(string $n,string $e,string $c){
        parent::__construct($n,$e);
        $this->cpf = $c;
    }

    public function getDados(){
        return "Nome: {$this->nome}\nE-Mail: {$this->email}\nCPF: {$this->cpf}\n";
    }
}

$cpf = new ClientePF("Kauan", "Kauan@gmail.com", "123.123.123-00");
echo $cpf->getDados();

?>