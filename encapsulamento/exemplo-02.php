<?php

class Pessoa {

    // Public todo mundo ve
    // Protected Mesma classe, classe extendida(herdeiros), objeto não ve
    // Private Apenas na mesma classe
    public $nome = "Rasmur Lerdof";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados() {
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }

}

class Programador extends Pessoa {

    public function verDados() {

        echo get_class($this) . "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

$objeto = new Programador();
//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
//echo $objeto->senha . "<br/>";
$objeto->verDados();

?>