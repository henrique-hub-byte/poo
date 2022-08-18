<?php

class Carro extends Veiculo
{
    public $teto_solar = true;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function abrirTetoSolar()
    {
        echo 'Abrir teto solar';
    }

    function altetarPosicaoVolante()
    {
        echo 'Alterar posição volante';
    }
}

class Moto extends Veiculo
{

    public $contraPesoGuidao = true;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }
    function empinar()
    {
        echo 'epminar';
    }

    function trocarMarcha()
    {
        echo "desengatar embreagem com a mão e engatar a marcha com o pé";
    }
}

class Caminhao extends Veiculo{
    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }
}

class Veiculo
{
    public $placa = null;
    public $cor = null;

    function acelerar()
    {
        echo 'Acelerar';
    }

    function trocarMarcha()
    {
        echo "desengantar embreamgem com o pé e engatar machar com a mão";
    }
}

$carro = new Carro('ABC1234', 'branco');
$moto = new Moto('EEF2323','preta');
$caminhao = new Caminhao('WER5659', 'vermelho');
echo "<pre>";
print_r($carro);
echo '<br>';
print_r($moto);
echo "</pre>";

$carro->abrirTetoSolar();
echo '<br>';
$carro->acelerar();
echo '<br>';
$carro->trocarMarcha();
echo '<hr>';

$moto->acelerar();
echo '<br>';
$moto->trocarMarcha();
echo '<hr>';
$caminhao->trocarMarcha();

