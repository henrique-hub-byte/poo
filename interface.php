<?php

use Humano as GlobalHumano;

    interface EquipamentoEletronicoInterface{
        public function ligar();
        public function desligar();
        
    }

    /* ---------------------------------- */

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta(){
            echo "abrir a porta";
        }

        public function ligar(){
            echo "ligar";
        }

        public function desligar(){
            echo "desligar";
        }
    }

    class Tv implements EquipamentoEletronicoInterface {
        public function trocarCanal(){
            echo "trocar canal";
        }
        /* temos q implementar todos os metodos dentro da interface  */
        public function ligar(){
            echo "ligar a tv";
        }

        public function desligar(){
            echo "ligar a tv";
        }
    }

    $geladeira = new Geladeira();
    $tv = new Tv();

    $geladeira->ligar(); 
    echo '<br>';
    $tv->ligar();
    /* ----------------------------------------- */
    echo '<hr><hr><hr>';

    interface Mamifero{
        public function respirar();
    }

    interface Terrestre {
        public function andar();
    }

    interface Aquatico {
        public function nadar();
    }

    class Humano implements Mamifero,Terrestre {
        public function respirar(){
            echo "respirando";
        }

        public function andar(){
            echo "andando";
        }
    }

    class Tubarao implements Mamifero,Aquatico{
        public function respirar()
        {
            echo "respirar de baixo da agua";
        }

        public function nadar()
        {
            echo "nadando";
        }
    }

    $humano = new Humano();

    $humano->respirar();
    echo '<br>';
    $humano->andar();
    echo '<hr>';
    /* novo objeto */
    $tubarao = new Tubarao;

    $tubarao->respirar();
    echo '<br>';
    $tubarao->nadar();

    echo '<hr><hr><hr>';
    /* ----------------------------- */
    interface AmimalInterface {
        public function comer();
    }

    interface AveInterface extends AmimalInterface{
        public function voar();
    }
    class Papagaio implements AveInterface{
        public function comer(){
            echo "comendo";
        }

        public function voar(){
            echo 'voando';
        }
    }

    $papagaio = new Papagaio();

    $papagaio->comer();
?>