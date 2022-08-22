<?php

namespace A;

    class Cliente implements CadastroCliente{
        public $nome = "carlos";

        function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function comprar(){
            echo 'comprando';
        }

    }

    interface CadastroCliente{
        public function comprar();
    }

?>