<div class="footer">
<?php
/**
 * Prova Desenvolvimento de Sistema com PHP
 * Univerdade positivo
 * compactar todos os arquivos do projeto num arquivo .zip com seu numero de matricula
 * Ex.: 00100100.zip
 **/

    $tipoPessoa = $_SESSION['tipoPessoa'] == 'PF' ? "Pessoa Física" : "Pessoa Jurídica";
    echo "<i class='fa fa-fw fa-info-circle'></i> Usuário <b>" . $_SESSION['nome'] . "</b>, $tipoPessoa, logado através do IP <b>" . $_SERVER['REMOTE_ADDR'] . "</b>";
?>
</div>
 
</body>
</html>