<?php
    class Carro extends Veiculo {
        public $teto_solar = true;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }

        function altetarPosicaoVolante(){
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo {

        public $contraPesoGuidao = true;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }
        function empinar(){
            echo 'epminar';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerar';
        }
         
    }

    $carro = new Carro('ABC1234','branco');
    $moto = new Moto('EEF2323','preta');

    echo "<pre>";
    print_r($carro);
    echo '<br>';
    print_r($moto);
    echo "</pre>";

    $carro->abrirTetoSolar();
    echo '<br>';
    $carro->acelerar();
    echo '<hr>';
    $moto->acelerar();
?>