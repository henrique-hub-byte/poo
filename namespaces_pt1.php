<?php

    namespace A;
    class Cliente implements CadastroInterface, \B\CadastroInterface {
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



    namespace B;
    class Cliente implements CadastroInterface, \A\CadastroInterface {
        public $nome = 'josé';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr)
        {
            return $this->$attr;
        }

        public function remover()
        {
            echo "removido";
        }

        public function salvar()
        {
            echo "arquivo salvo";
        }
    }

    $c = new \A\Cliente();

    print_r($c);

    echo $c->__get('nome'). "<br>";
    $c->remover();

    interface CadastroInterface{
        public function remover();
    }

    /* ainda estamos no name space b */
?>