<?php

////////// PASSAGEM DE PARÂMETRO POR VALOR

$a = 10;

function trocaValor($a) {
     $a += 50;
     return $a;
}

echo trocaValor($a);
echo "<br/>";
echo $a;

echo "<br/>";

////////// PASSAGEM DE PARÂMETRO POR REFERÊNCIA

$b = 10;

function trocaOutroValor(&$b) {
     $b += 50;
     return $b;
}

echo trocaOutroValor($b);
echo "<br/>";
echo $b;

?>