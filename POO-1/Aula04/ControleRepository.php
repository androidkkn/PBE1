<?php 
require_once 'ControleInterface.php';

abstract class ControleRepository implements ControleInterface{
        //Métodos
    

    #[Override]
    public function io()
    {
        if($this->status){
            echo "Desligando...";
            sleep(1);
            $this->status = false;
        } else {
            echo "TV veia ruin: Seja bem vindo de volta senhor das trevas";
            sleep(1);
            $this->status = true;
        }
    }

    #[Override]
    public function aumentaV()
    {
        if($this->volume <= 100){
            $this->volume += 1;
            return "Volume: {$this->volume}";
        } else {
            echo "Volume no maximo, abaixa essa merda maluco!!!";
        }
    }

    #[Override]
    public function abaixaV()
    {
        if($this->volume >= 0){
             $this->volume -= 1;
            return "Volume: {$this->volume}";
        } else {
            echo "O volume está no minimo";
        }
    }

    #[Override]
    public function mudo()
    {
        if($this->volume > 0){
            return "🔇";
            $this->volume ;
        } else{
            return "🔈";
            $this->volume = 30;
        }
    }

    #[Override]
    public function maisCanal()
    {
        if($this->canal < 999){
            $this->canal += 1;
            return $this->canal;
        } else {
            $this->canal = 1;
            return $this->canal;
        }
    }

    #[Override]
    public function menosCanal()
    {
        if($this->canal > 1){
            return $this->canal -= 1;
        } else {
            return $this->canal = 999;
        }
    }

    #[Override]
    public function menu()
    {
        return "
Ligado:" . ($this->status ? "Ligado":"Desligado") ."
Volume: {$this->volume}
Canal: {$this->canal}";
    }

}
?>