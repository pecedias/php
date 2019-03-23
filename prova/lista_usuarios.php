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

$con = conectaBanco();
$sql = "select * from pessoa";

$res = mysqli_query($con, $sql);

echo "<div style='overflow-x:auto;'>";
echo "<table><tr><th>Usuário</th><th>Nome</th><th>Tipo Pessoa</th><th>Operações</th></tr>";

if (mysqli_num_rows($res) > 0) {
    // mostra os dados recuperados pela consulta
    while($reg = mysqli_fetch_assoc($res)) {
        echo "<tr><td>" . $reg['usuario'] . "</td>";
        echo "<td>" . $reg['nome'] . "</td>";
        if ($reg['tipoPessoa'] == 'PF') {
            $tipoPessoa = "Pessoa Física";
        } else {
            $tipoPessoa = "Pessoa Jurídica";
        }
        echo "<td>$tipoPessoa</td>";
        echo "<td>";
        echo "<a href='form_usuario.php?op=novo'><i class='fa fa-fw fa-file-o'></i></a> ";
        echo "<a href='form_usuario.php?op=edit&idPessoa=" .$reg['idPessoa']. "'><i class='fa fa-fw fa-edit'></i></a> ";
        echo "<a href='salva_usuario.php?op=delete&idPessoa=" .$reg['idPessoa']. "'><i class='fa fa-fw fa-trash'></i></a>";
        echo "</td></tr>";
    }
}

echo "</table></div>";

require_once("rodape.php");

?>