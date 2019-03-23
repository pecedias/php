<?php

/**
 * Prova Desenvolvimento de Sistema com PHP
 * Univerdade positivo
 * compactar todos os arquivos do projeto num arquivo .zip com seu numero de matricula
 * Ex.: 00100100.zip
 **/

session_start();

if (!isset($_SESSION['usuario'])) {
    header("location: login.php");
}

require_once("cabecalho.php");
require_once("funcoes.php");

$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : '';
$idPessoa = 0;
$nome = '';
$usuario = '';
$tipPessoa = '';
$pf = '';
$pj = '';

if ($op == 'edit') {
    $idPessoa = $_REQUEST['idPessoa'];
    $sql = "select * from pessoa where idPessoa = $idPessoa";
    $res = executaSQL($sql);
    if (mysqli_num_rows($res) > 0) {
        $reg = mysqli_fetch_assoc($res);
        $nome = $reg['nome'];
        $tipPessoa = $reg['tipPessoa'];
        $pf = $tipPessoa == 'PF' ? ' selected' : '';
        $pj = $tipPessoa == 'PJ' ? ' selected' : '';
        $usuario = $reg['usuario'];
    }
}

?>
    <!-- questao 7 -->
    <!-- inicio -->

    <!-- fim -->
<?php

require_once("rodape.php");

?>