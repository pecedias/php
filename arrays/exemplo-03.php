<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Joao',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Paulo',
    'idade' => 23
));

print_r($pessoas[0]['nome']);

?>