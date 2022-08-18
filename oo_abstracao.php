<?php
    //modelo/classe
    class Funcionario {
        //atributos
        private $nome = null;
        private $telefone = null;
        private $numFilhos = null;
        private $cargo = null;
        private $salario = null;

        /* overloading / sobrecarga */
         function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        function  __get($atributo){
            return $this->$atributo;
        }

        //getters e setters
        function setNome($nome){
            $this->nome = $nome;
        }

        function getNome(){
            return $this->nome;
        }

        function setTelefone($tel){
            $this->telefone = $tel;
        }

        function getTelefone(){
            return $this->telefone;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        public function resumirCadFunc(){
            return $this->__get('nome'). " possui " . $this->__get('idade') ." filhos(s)  o telefone: " . $this->__get('telefone');
        }

        public function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    /* identidade/instancia */
/*  $pessoa1 = new Funcionario();
    echo $pessoa1->resumirCadFunc();
    echo '<br>';
    $pessoa1->modificarNumFilhos(3);
    echo $pessoa1->resumirCadFunc();
    echo '<hr>';
 */

    $pessoa2 = new Funcionario();
    $pessoa2->__set('nome' ,'luis');
    /* echo $pessoa2->getNome();*/
    $pessoa2->__set('telefone','42 98440-4792');
    /* echo $pessoa2->getTelefone(); */
    $pessoa2->__set('numFilhos', 3);
    $pessoa2->__set('cargo', 'programdor');
    $pessoa2->__set('salario', 3.000);
    echo $pessoa2->resumirCadFunc();
    echo '<hr>';
    /* echo $pessoa2->getNumFilhos(); */
    //echo $pessoa2->resumirCadFunc();
   /*  echo $pessoa2->__get('nome') . ' possui: ' . $pessoa2->__get('numFilhos') . ' filhos(s) ' . ' o telefone: ' . $pessoa2->__get('telefone').
    ' cargo '. $pessoa2->__get('cargo'). ' salario '. $pessoa2->__get('salario');
    echo '<hr>'; */
/*
    $pessoa3 = new Funcionario();
    $pessoa3->modificarNumFilhos(2);
    echo $pessoa3->resumirCadFunc();
*/
    $pessoa4 = new Funcionario();

    $pessoa4->setNome('joaquina');
    $pessoa4->setNumFilhos(0);
    $pessoa4->setTelefone('11 98565-5944');
    echo $pessoa4->getNome(). "<br> possui " . $pessoa4->getNumFilhos(). " filhos(s) <br> o telefone: ". $pessoa4->getTelefone();



