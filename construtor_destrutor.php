<?php
    class Pessoa {
        public $nome = null;


        function __construct($nome) {
            echo "Objeto inicado";

            $this->nome = $nome;
        }

        function __destruct()
        {
            echo 'Objeto removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this->__Get('nome'). 'está correndo ';
        }
    }

    $pessoa = new pessoa('jorge');
    echo ' Nome: '. $pessoa->__get('nome');
    echo "<br>". $pessoa->correr();

    /* removendo o objeto da memoria  */
   // unset($pessoa);

?>