<?php

class Pessoa {
    // Public é o encapsulamento
    public $nome; // Atributo

    public function falar() { // Método
        return "O meu nome é ".$this->nome; // Só utilizar $this dentro de um método, fora usar $
    }

}

$paulo = new Pessoa();
$paulo->nome = "Paulo Dias";
echo $paulo->falar();

?>