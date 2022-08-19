<?php

use Pai as GlobalPai;

    class Mae extends Pai{
        private $nome = "rosiane";
        protected $sobrenome = "kukla";
        public $humor = "feliz";

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo ,$valor){
            $this->$atributo = $valor;
        }

        private function fazeralgo_de_mae(){
            echo "fazendo algo de mãe";
        }

        public function executar_func_mae(){
            $this->fazeralgo_de_mae();
        }

       /*  public function getNome(){
            return $this->nome;
        }

        public function setNome($value){

            if(strlen($value) >= 3){
                $this->nome = $value;
            }
        } */
/*
        public  function getSobrenome(){
           return $this->sobrenome;
        }

        public function setSobrenome($valor){
            if(strlen($valor) >3 ){
                $this->sobrenome = $valor;
            }
        } */
    }

    $mae = new Mae;

    /* echo $mae->humor; */
/*
    $mae->__set('Marcia', 'nome');
    $mae->__set('lourenço' , 'sobrenome');
    echo '<br>';
    echo $mae->__get('nome') ." ". $mae->__get('sobrenome'); */

    $mae->nome = "marcia";
    $mae->sobrenome = "lourenço";
    echo $mae->nome. ' ' . $mae->sobrenome;
    echo '<br>';
    $mae->executar_func_mae();
    echo '<br>';
    $mae->exe_pai();

    class Pai {
        private $nome = "roger";
        private $sobrenome = "guedes";
        public $humor = "feliz";

        /* metodos magicos getters e setters */
        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        /* metodos convencional de getters e setters */
        public function getNome(){
            return $this->nome;
        }

        public function setNome($valor){

            if(strlen($valor) >= 3){
                $this->nome = $valor;
            }
        }

        private function funcao_pai(){
            if($this->nome == "roger"){
                echo "fazer gol";
            }else{
                echo "faz coisa de pai";
            }
        }

        public function exe_pai(){
            $this->funcao_pai();
        }

    }

    $pai = new Pai;
    echo '<hr><hr><hr><hr>';

    /* pasando o valor do parametro pelo set */
    //metodo do convecional do set
    $pai->setNome('roger');

    /* retornando o valor o obtido pelo metodo get */
    //metodo do convecional do get
    /* echo $pai->getNome(); */

    /* metodo magico os dois parametros serão passados para os parametros em __set */
    $pai->__set('sobrenome' , 'guedes');
    /* printando os valores dos atributos privados e protegidos com dois get diferentes */
    echo $pai->getNome(). ' '. $pai->__get('sobrenome');
    echo '<br>';
    $pai->exe_pai();
?>