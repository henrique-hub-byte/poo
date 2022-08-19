<?php
class Pai
{
    /* operadores de visibilidade */
    private $nome = "Luis";
    protected $sobrenome = "martins";
    public $humor = 'feliz';

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    private function exexutarMania()
    {
        echo "assobiar";
    }

    protected function responder()
    {
        echo "oi";
    }

    public function exercutarAcao()
    {
        $this->exexutarMania();
        echo '<br>';
        $this->responder();
    }
}

class Filho extends pai
{
    public function __construct()
    {
        /* exibir os metodos do objeto */
        echo '<pre>';
        print_r(get_class_methods($this));
        /* print_r($filhos); */
        echo '</pre>';
    }
    protected function responder()
    {
        echo "hello";
    }

    /* public function getAtributo($attr){
            return $this->$attr;
        } */
    /*
        public function setAtributo($attr, $value){
            $this->$attr = $value;
        } */
}
/*
    $pai = new Pai();
    $pai->sobrenome = 'bonfim';
    echo $pai->exercutarAcao(); */

$filho = new Filho;
echo '<pre>';
print_r($filho);
echo '</pre>';

/* metodos da classe filho */
/* $filho->setAtributo('nome', 'steven');
    echo '<pre>';
    print_r($filho);
    echo '</pre>';
    echo $filho->getAtributo('nome'); */


echo $filho->__set('nome', 'outro luis');
/* por ter feito o extends do atributo que tem
    metodos magicos get e set conseguimos alterar os atributos
    private */
echo $filho->__get('nome');
echo '<hr>';
$filho->exercutarAcao();
