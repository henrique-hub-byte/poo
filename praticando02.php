<?php
    class Factor extends Auto_moveis {

        public $cilindrada = 160;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function levantarBanco(){
            echo "levantar banco";
        }
    }

    class Gol extends Auto_moveis{


        public $qtd_portas = null;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirPorta(){
            echo 'porta aberta';
        }
    }

    class Auto_moveis {
        function acelerar(){
            echo 'acelerar';
        }

        function frear(){
            echo 'frear';
        }
    }

    $moto1 = new Factor('EDC7898', 'PRATA');
    $carro1 = new Gol('ODD', 'PRETO');

    echo '<pre>';
    print_r ($moto1);
    echo '<pre>';
    echo '<br>';

    echo '<pre>';
    print_r ($carro);
    echo '<pre>';

    echo '<br>';
    $moto1->acelerar();
    $moto1->frear();
    $moto1->levantarBanco();
    echo '<hr>';
    $carro1->acelerar();
    $carro1->frear();
    $carro1->abrirPorta();


?>