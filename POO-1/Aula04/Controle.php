<?php 
require_once 'ControleRepository.php';
//Criando a CLASSE controle
class Controle extends ControleRepository{
    //Atributos
    protected bool $status;
    protected int $volume;
    protected int $canal;

    public function __construct()
    {
        $this->status = false;
        $this->volume = 30;
        $this->canal = 500;
    }

}

$c1= new Controle(true);


?>