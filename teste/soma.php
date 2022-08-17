<?php

class Calculadora {
    /* atributos */
    public $a = 10;
    public $b = 7;
    public $operador = 'soma';


    /* recuperar os atributos do objeto*/
    public function calcular(){
        if($this->operador == 'soma'){
             return $this->a + $this->b;
        }
        return false;
    }
}


$calcular = new Calculadora();
echo $calcular->calcular();




class Soma {
    public $a = 11;
    public $b = 7;
    public $result;

    public function operacao( ) {
        return $this->a + $this->b;
         $this->result;
    }
}

    $soma = new Soma;
    echo $soma->operacao;

?>