<?php
class NoteBook
{
    //Atributos
    private string $marca;
    private string $processador;
    private int $ramGb;
    private int $armazenamentoGb;
    private bool $ligado;

    //metodos
    public function __construct(string $mar, string $CPU, int $RAM, int $storage, bool $on)
    {
        $this->marca = $mar;
        $this->processador = $CPU;
        $this->ramGb = $RAM;
        $this->armazenamentoGb = $storage;
        $this->ligado = $on;
    }


    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($mar)
    {
        $this->marca = $mar;
    }

    public function getProcess()
    {
        return $this->processador;
    }
    public function setProcess($CPU)
    {
        $this->processador = $CPU;
    }

    public function getRAM()
    {
        return $this->ramGb;
    }
    public function setRAM($RAM)
    {
        $this->ramGb = $RAM;
    }

    public function getStorage()
    {
        return $this->armazenamentoGb;
    }
    public function setStorage($storage)
    {
        $this->armazenamentoGb = $storage;
    }

    public function getStaus()
    {
        return $this->ligado;
    }
    public function setStatus($on)
    {
        $this->ligado = $on;
    }

    public function mostrarEspecs()
    {
        echo "<h2>As específicações do PC são:</h2><br>";
        echo "Marca: {$this->marca}<br>";
        echo "Processador: {$this->processador}<br>";
        echo "RAM: {$this->ramGb} GB<br>";
        echo "Armazenamento: {$this->armazenamentoGb} GB<br>";
        echo "Status: " . ($this->ligado ? "Ligado" : "Desligado") . "<br>";
    }

    //funções liga, desliga e reenicia
    public function BTligar()
    {
        $this->ligado = true;
    }

    public function BTdesligar()
    {
        $this->ligado = false;
    }

    public function reeniciar()
    {
        if ($this->ligado) {
            $this->ligado = false;
            sleep(5);
            echo "PC reiniciado";
            $this->ligado = true;
        }
    }
}

session_start();

if (isset($_POST["montar"])) {
    $c1 = new NoteBook(
        $_POST["marca"],
        $_POST["CPU"],
        (int) $_POST["RAM"],
        (int) $_POST["storage"],
        false
    );
} else {
    $c1 = $_SESSION["notebook"] ?? null;
}

$mensagem = "";
if ($c1 instanceof NoteBook) {
    if (isset($_POST["ligar"])) {
        $c1->BTligar();
    } elseif (isset($_POST["desligar"])) {
        $c1->BTdesligar();
    } elseif (isset($_POST["reeniciar"])) {
        $c1->reeniciar();
    }

    $_SESSION["notebook"] = $c1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pc.php</title>
</head>

<body>
    <form method="post">
        <h1>Defina as especificações do seu pc</h1>
        <label for="marca">Marca: </label>
        <input type="text" name="marca" id="marca">
        <br>

        <label for="CPU">Processador: </label>
        <input type="text" name="CPU" id="CPU">
        <br>
        <label for="RAM">Memória RAM: </label>
        <input type="number" name="RAM" id="RAM">
        <br>
        <label for="storage">Quantidade de Armazenamento: </label>
        <input type="number" name="storage" id="storage">
        <br>
        <input type="submit" value="Montar PC" name="montar">
    </form>


        <?php $c1->mostrarEspecs(); ?>

        <form method="post">
            <button type="submit" name="ligar">Ligar</button>
            <button type="submit" name="desligar">Desligar</button>
            <button type="submit" name="reeniciar">Reiniciar</button>
        </form>
</body>

</html>


<!-- 
DESAFIO PROFISSIONALA empresa quer validar o CPF antes de salvar.
Pergunta:
Onde essa validação deve ficar?
no formulário?
no setter?
direto no atributo?

Resposta:

A validação do CPF deve ficar no setter (ou construtor) para garantir o encapsulamento e a integridade do objeto em POO. O formulário serve apenas para a experiência do usuário no frontend (pode ser burlado) e o atributo em si não possui lógica para validar a si mesmo.
-->