<?php

use Filho as GlobalFilho;
use Pai as GlobalPai;

class pai
{
    private $nome = "burn-o";
    protected $sobrenome = "da silva";
    public $humor = "exuberante";

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    private function priv_func(){
        echo "cantando";
    }

    public function pub_func(){
        $this->priv_func();
    }
}

class Filho extends Pai{

}
$filho = new Filho;
echo '<pre>';
print_r($filho);
echo '</pre>';

$filho->__set('nome', 'reginaldo rossi');
echo $filho->__get('nome');
echo '<br>';
$filho->pub_func();
?>