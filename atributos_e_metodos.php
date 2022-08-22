<?php
    class exemplo {
        public static $atributo1 = 'eu sou um atributo estatico';
        public $atributo2 = 'atributo normal';

        public static function metodo1(){
            echo "eu sou um metodo statico";
        }

        public function metodo2(){
             echo "metodo normal";
        }
    }


    /* $x = new exemplo; */
    /* para atriutos e metodos estaticos não precisamos fazer a instancia padrão */
    echo Exemplo::$atributo1;
    echo '<br>';
    exemplo::metodo1();
?>