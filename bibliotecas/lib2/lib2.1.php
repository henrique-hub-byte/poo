<?php

namespace B;
    class Cliente implements \B\CadastroCliente{
        public $nome = "carlitos";

        function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function passardados(){
            echo "dados passados";
        }
    }

    interface CadastroCliente{
        public function passardados();
    }

?>