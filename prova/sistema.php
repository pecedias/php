<?php

/**
 * Prova Desenvolvimento de Sistema com PHP
 * Univerdade positivo
 * compactar todos os arquivos do projeto num arquivo .zip com seu numero de matricula
 * Ex.: 00100100.zip
 **/

    require_once("funcoes.php");

    $usuario = $_REQUEST['usuario'];
    $senha = $_REQUEST['senha'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $usuario; ?></title>

</head>
<body>

<?php


$sql = "select * from pessoa where usuario = '" . $usuario . 
        "' and senha = '" . md5($senha) . "'";
$res = executaSQL($sql);

if (isset($usuario)) {
    $reg = mysqli_fetch_assoc($res);
    echo "<h2>Usuário " . $reg['nome'] . " logado com sucesso!!!</h2>";
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome'] = $reg['nome'];
    $_SESSION['tipoPessoa'] = $reg['tipoPessoa'];
    header("location: menu.php");
} else {
    header("location: menu.php");
}

?>

</body>
</html>