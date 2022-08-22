<?php

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

    public function __construct()
    {
        echo '<pre>';  
        print_r(get_class_methods($this));
        echo '</pre>';
    }

}
$filho = new Filho;
echo '<pre>';
print_r($filho);
echo '</pre>';

/*  */
$filho->__set('nome', 'reginaldo rossi');
echo $filho->__get('nome');
echo '<br>';
/* executando o metodo que pertece a classe pai através da classe filho */
$filho->pub_func();
?>