<?php

namespace B;
class Cliente implements CadastroInterface {
    public $nome = 'josé';

    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function remover()
    {
        echo "removido";
    }

    public function salvar()
    {
        echo "arquivo salvo";
    }
}

interface CadastroInterface{
    public function remover();
}
?>