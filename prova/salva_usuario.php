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
$idPessoa = $_REQUEST['idPessoa'];
if ($op != 'delete') {
    $usuario = $_REQUEST['usuario'];
    $senha = md5($_REQUEST['senha']);
    $tipoPessoa = $_REQUEST['tipoPessoa'];
    $nome = $_REQUEST['nome'];
}

if ($idPessoa == 0) {
    $sql = "insert into pessoa (nome,senha,tipoPessoa,usuario) ".
            "values ('$nome','$senha','$tipoPessoa','$usuario')";

    $res = executaSQL($sql);

    if ($res) {
        echo "Usuário $usuario cadastrado com sucesso!";
    } else {
        echo "Não foi possível cadastrar usuário";
    }
} else {
    if ($op == 'delete') {
    $sql = "update pessoa set nome='$nome', tipoPessoa='$tipoPessoa',
                              usuario='$usuario', senha='$senha'
            where idPessoa = $idPessoa";

    $res = executaSQL($sql);

    if ($res) {
        echo "Usuário $usuario atualizado com sucesso!";
    } else {
        echo "Não foi possível atualizar o usuário";
    }
        $acao = "excluído";
        $usuario = '';
    } else {
            $sql = "update pessoa set nome='$nome', tipoPessoa='$tipoPessoa',
            usuario='$usuario', senha='$senha'
    where idPessoa = $idPessoa";

    $res = executaSQL($sql);

    if ($res) {
    echo "Usuário $usuario atualizado com sucesso!";
    } else {
    echo "Não foi possível atualizar o usuário";
    }
        $acao = "atualizado";
    }
}

require_once("rodape.php");
?>