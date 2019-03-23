<?php

$nome = "Paulo";
$sobrenome = "Dias";
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

//exit;

echo "<br/>";

var_dump($nome);

echo "<br/>";

unset($nome); // Limpar uma variável já definida

if(isset($nome)) {
    echo $nome;
}

echo "<br/><br/>";
echo "<h1>Tipos de variáveis:</h1>";

echo "<h3>Tipo Básico: </h3>";
$nome = "Paulo Dias";
$site = 'www.paulodias.com.br';
$ano = 1995;
$salario = 7999.99;
$bloqueado = false;

echo $nome . " <br/>" . $site . " <br/>" . " " . $ano . " <br/>" . $salario . " <br/>" . $bloqueado;

echo "<h3>Tipo Composto: </h3>";
$frutas = array("abacaxi", "laranja", "manga");
echo $frutas[2];

echo "<br/>";

echo "<h3>Tipo Especial: </h3>";
$nascimento = new DateTime();
//var_dump($nascimento);

$arquivo = fopen("exemplo.php", "r");
var_dump($arquivo);

$nulo = NULL; // ausência de valor
$vazio = ""; // foi iniciado, porém não possui informação

?>