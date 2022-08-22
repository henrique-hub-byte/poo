<?php
    interface Habilidades extends Responsabilidades {
        public function atividade();
        public function  profisao();
    }

    interface Responsabilidades {
        public function dever();
    }



    class pessoa1 implements Habilidades {
        public function atividade() {
            echo "programação,suporte";
        }

        public function profisao()
        {
            echo "programador";
        }

        public function dever()
        {
            echo "fazer um sistema funcional";
        }
    }

    $pessoa1 = new pessoa1();

    $pessoa1->atividade();
    echo '<br>';
    $pessoa1->dever();
?>