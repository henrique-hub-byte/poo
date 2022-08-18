<?php
    class Pai  {
        private $nome = "Luis";
        protected $sobrenome = "martins";
        public $humor = 'feliz';

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($name, $value)
        {
            $this->$name = $value;

        }

        private function exexutarMania(){
            echo "assobiar";
        }

        protected function responder (){
            echo "oi";
        }

        public function exercutarAcao(){
            $this->exexutarMania();
            echo '<br>';
            $this->responder();
        }


    }

    $pai = new Pai();
    $pai->sobrenome = 'bonfim';
    echo $pai->exercutarAcao();
?>
