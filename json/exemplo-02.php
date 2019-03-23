<?php

$json = '[{"nome":"Joao","idade":20},{"nome":"Paulo","idade":23}]';

$data = json_decode($json, true); // se não colocar true ele transforma tudo em objeto, e não em array

var_dump($data);

?>