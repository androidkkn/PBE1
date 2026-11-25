<?php 
require_once 'Cliente.php';
class ClientePJ extends Cliente{
    private string $cnpj;

    public function __construct(string $n, string $e, string $cnpj)
    {
        parent::__construct($n, $e);
        $this->cnpj = $cnpj;
    }
    public function getDados(){
        return "Nome: {$this->nome}\nE-mail : {$this->email}\nCNPJ: {$this->cnpj}";
    }

}

$cj = new ClientePJ("Kauan", "kauan@gmail.com", "12.123.123/1234-00");
echo $cj->getDados();
?>