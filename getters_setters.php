<?php

use Humano as GlobalHumano;

class Humano
{
    public $nome = null;
    public $idade = null;
    public $numFilhos = null;
    public $cargos = null;
    public $salario = null;

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }

    function setNome($n)
    {
        $this->nome = $n;
    }
    function getNome()
    {
        return $this->nome;
    }

    function setIdade($i)
    {
        $this->idade = $i;
    }
    function getIdade()
    {
        return $this->idade;
    }

    function setNumFilhos($nf)
    {
        $this->numFilhos = $nf;
    }
    function getNumFilhos()
    {
        return $this->numFilhos;
    }
    function setCargo($c)
    {
        $this->cargo = $c;
    }
    function getCargo()
    {
        return $this->cargo;
    }

    function setSalario($s)
    {
        $this->salario = number_format($s, 3, ',', '');
    }
    function getSalario()
    {
        return $this->salario;
    }

    public function resumirPessoa()
    {
        echo '<hr>';
        echo " nome: " . $this->__get('nome') . "<br> idade: " . $this->__get('idade') . "<br> numero de filhos: " . $this->__get('numFilhos') .
            "<br> cargo: " . $this->__get('cargo') . "<br> salario: " . $this->__get('salario');
        echo '<hr>';

        /* echo '<hr>';
        echo "Nome: " . $this->nome .  "<br>";
        echo "idade: " . $this->idade . "<br>";
        echo "numero de filhos: " . $this->numFilhos . "<br>";
        echo "cargo: " . $this->cargos . "<br>";
        echo "salario: " . $this->salario . "<br>";
        echo '<hr>';*/
    }

    /* um metodo para modificar o valor dos atributos passando parametros */
    public function modificarPessoa($n, $i, $nf, $c, $f)
    {
        $this->nome = $n;
        $this->idade = $i;
        $this->numFilhos = $nf;
        $this->cargos = $c;
        $this->salario = number_format($f, 3, ',', '');
    }
}
/* instanciando o objeto */
$pessoa1 = new Humano;

$pessoa1->modificarPessoa('jurgen klopp', 49, 2, 'manager', 600.000);
echo $pessoa1->resumirPessoa();
'echo <hr>';
$pessoa2 = new Humano;

$pessoa2->setNome('Guardiola');
$pessoa2->setIdade('45');
$pessoa2->setNumFilhos(0);
$pessoa2->setCargo('treinador');
$pessoa2->setSalario(900.000);

echo "nome: " . $pessoa2->getNome() . "<br> idade: " . $pessoa2->getIdade() . "<br> quantidade de filhos: " . $pessoa2->getNumFilhos() . "<br>
    cargo: " . $pessoa2->getCargo() . "<br> salario: " . $pessoa2->getSalario();
echo "<hr>";

$pessoa3 = new Humano;

$pessoa3->__set('nome', 'tuchel');
$pessoa3->__set('idade', 42);
$pessoa3->__set('numFilhos', 1);
$pessoa3->__set('cargo', 'treinador');
$pessoa3->__set('salario', 700.000);

/* echo '<br>';
echo " nome: " . $pessoa3->__get('nome') . "<br> idade: " . $pessoa3->__get('idade') . "<br> numero de filhos: " . $pessoa3->__get('numFilhos') .
    "<br> cargo: " . $pessoa3->__get('cargo') . "<br> salario: " . $pessoa3->__get('salario');
echo '<br>'; */
