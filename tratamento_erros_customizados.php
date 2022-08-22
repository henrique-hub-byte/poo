<?php
    class MinhaExceptionCustomizada extends Exception {
        private $erro = '';

        public function __construct($erro){
            $this->erro = $erro;
        }

        public function ExibirMensagemCustomizada(){

            echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white;">';
            echo $this->erro;
            echo '</div>';
        }
    }

    try{

        throw new MinhaExceptionCustomizada('esse é o erro de teste');
    }catch(MinhaExceptionCustomizada $e){
        $e->ExibirMensagemCustomizada();
    }

?>