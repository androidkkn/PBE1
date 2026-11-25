<?php 

abstract class Funcionario{
    protected string $nome;
    protected string $email;

    public function __construct(string $n,string $e){
        $this->nome = $n;
        $this->email = $e;

        
    }

    public function getDados(){
        return "Nome: {$this->nome} \nE-mail: {$this->email}";
    }

    abstract public function calcularPagamento(): float;
}

class FuncionarioCLT extends Funcionario{
    private string $cpf;
    private string $carteiraTrabalho;
    private string $dataAdmissao;
    private float $cargaHoraria;
    private float $salario;

    function __construct(string $n, string $e, string $c, string $ct, string $da, float $ch, float $s)
    {
        parent::__construct($n, $e);
        $this->cpf = $c;
        $this->carteiraTrabalho = $ct;
        $this->dataAdmissao = $da;
        $this->cargaHoraria = $ch; // em horas
        $this->salario = $s;
    }

    public function getDados()
    {
        return "Nome: {$this->nome}\nE-Mail: {$this->email}\nCPF: {$this->cpf}\nN° da Carteira de Trabalho: {$this->carteiraTrabalho}\nData de Admissão: {$this->dataAdmissao}\nCarga Horária: {$this->cargaHoraria}\nSalário: {$this->salario}";
    }

    #[Override]
    public function calcularPagamento(): float
    {
        return $this->salario;
    }

}

class FuncionarioPJ extends Funcionario{
    private string $cnpj;
    private string $nomeEmpresa;
    private float $valorContrato;
    private string $formaPagamento;

    public function __construct(string $n, string $e, string $cj, string $ne, float $vc, string $fp){
        parent::__construct($n, $e);
        $this->cnpj = $cj;
        $this->nomeEmpresa = $ne;
        $this->valorContrato = $vc;
        $this->formaPagamento = $fp;
    }

    #[Override]
    public function getDados()
    {
        return "Nome: {$this->nome}\nE-Mail: {$this->email}\nCNPJ: {$this->cnpj}\nNome da Empresa: {$this->nomeEmpresa}\nValor do Contrato: {$this->valorContrato}\nForma de pagamento: {$this->formaPagamento}";
    }

    #[Override]
    public function calcularPagamento(): float
    {
        return $this->valorContrato;
    }
}

$c[1] = new FuncionarioCLT("Kauan", "kauan@kauan.com", "123123123-00", "1234567/1234", "10/08/25", 10, 100000);

$c[2] = new FuncionarioPJ("Kauan", "kauan@kauan.com","12123123123/1234-00", "KauanGameplays", 67000, "Dinheiro");

foreach ($c as $funcionario) {
    echo $funcionario->getDados();

    $valor = number_format(
        $funcionario->calcularPagamento(),2,',','.');

    echo "Pagamento: R$ {$valor}\n";
}

/*
APLICAÇÂO

Explique com suas palavras o que é herança.
-  permite que uma classe filha aproveite e reutilize atributos e métodos de uma classe mãe. Ela estabelece uma relação hierárquica que ajuda ná organização do codigo e na parte da manutenção.
Qual a diferença entre private e protected?
- private restringe o acesso apenas à própria classe que o declarou, ja o protected tambem deixa o acesso as subclasses.
O que significa sobrescrever um método?
- criar uma nova implementação para um método que já foi definido em uma classe MÃE, dentro de uma subclasse (classe filha)


PROFISSIONAL

A empresa quer adicionar Cliente Internacional no futuro.
Perguntas:
O código atual suporta essa mudança?
- Parcialmente. Este arquivo mostra herança e sobrescrita em tipos de funcionário, mas não implementa clientes. Para clientes, a classe Cliente deve servir como base para novos tipos.
O que precisa ser feito?
- Criar uma classe ClienteInternacional que herde de Cliente, incluir os dados específicos (como país e identificação fiscal) e implementar seu próprio getDados().
Onde entra o polimorfismo?
- Ao reunir ClientePF, ClientePJ e ClienteInternacional em uma mesma coleção de Cliente e chamar getDados(): cada classe executa sua própria versão do método.
*/

?>
