<?php 

$nome = (int)$_GET["a"]; // todas as informações que vem do GET ou POST são strings

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; // Pega o IP
$log = $_SERVER["SCRIPT_NAME"]; // Pega a Página que está acessando
echo $ip;
echo "<br/>";
echo $log;

?>