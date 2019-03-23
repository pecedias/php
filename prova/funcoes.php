<?php

/**
 * Prova Desenvolvimento de Sistema com PHP
 * Univerdade positivo
 * compactar todos os arquivos do projeto num arquivo .zip com seu numero de matricula
 * Ex.: 00100100.zip
 **/

function conectaBanco() {
    $servidor = "localhost";
    $usuario = "aluno_1733721";
    $senha = "173";
    $banco = "db_1733721";

    $con = mysqli_connect($servidor,$usuario,$senha,$banco);

    if (!$con) {
        die("Conexão falhou: " . mysqli_connect_error());
    } else {
        return $con;
    }
}

function executaSQL($sql) {
    $con = conectaBanco();
    $res = mysqli_query($con, $sql);
    return $res;
}

/*$con = conectaBanco();
$sql = "select * from pessoa";

$res = mysqli_query($con, $sql);

//var_dump($res);

if (mysqli_num_rows($res) > 0) {
    // mostra os dados recuperados pela consulta
    while($reg = mysqli_fetch_assoc($res)) {
        echo "id: " . $reg["idPessoa"]. " - Nome: " . $reg["nome"]
        . " / " . $reg["usuario"]. "<br>";
    }
} else {
    echo "Nenhum resultado!";
}


mysqli_close($con);  */

?>