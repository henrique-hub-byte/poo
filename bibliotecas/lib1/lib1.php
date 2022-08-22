<?php

    namespace A;
    class Cliente implements CadastroInterface {
        public $nome = 'jorge';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function salvar(){
            echo "aquivo salvo";
        }
         public function remover()
         {
            echo "arquivo removido";
         }
    }

    interface CadastroInterface {
        public function salvar();
    }

?>