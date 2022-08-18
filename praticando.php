<?php
    class Humano {
        /* criei meus atributos */
        private $nome = null;
        private $idade = null;
        private $cidade = null;
        private $raca = null;


        /* metodos setters and getters */

        public function setNome($n){
            $this->nome = $n;
        }

        function getNome(){
            return $this->nome;
        }

        function setIdade($i){
            $this->idade = $i;
        }

        function getIdade(){
            return $this->idade;
        }

        function SetCidade($c){
            $this->cidade = $c;
        }

        function getCidade(){
            return $this->cidade;
        }

        function SetRaca($r){
            $this->raca = $r;
        }

        function getRaca(){
             return $this->raca;
        }

        /* criei meus metodos */
        function resumoPessoa(){
            return "o nome do ser humano é: $this->nome e a idade é $this->idade e
             a sua cidade é: $this->cidade e sua raça é: $this->raca";
        }

        function alterandoPessoa($n,$i,$c, $r){
            $this->nome = $n;
            $this->idade = $i;
            $this->cidade = $c;
            $this->raca = $r;
        }
    }

    $pessoa1 = new Humano;

    $pessoa1->setNome("outro luis");
    $pessoa1->setIdade(99);
    $pessoa1->SetCidade("liverpool");
    $pessoa1->SetRaca("vermelho");
    /* echo $pessoa1->resumoPessoa(); */
    echo "<hr>";
    echo "o nome: ". $pessoa1->getNome()."<br>";
    echo "a idade: ". $pessoa1->getIdade(). "<br>";
    echo "a cidade: ". $pessoa1->getCidade(). "<br>";
    echo "a raça: ". $pessoa1->getRaca(). "<br>";
    echo "<hr>";

    /*
    $pessoa1->alterandoPessoa('luis', 24, 'curitiba', 'azul');
    echo $pessoa1->resumoPessoa(); */



?>