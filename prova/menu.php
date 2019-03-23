<?php

/**
 * Prova Desenvolvimento de Sistema com PHP
 * Univerdade positivo
 * compactar todos os arquivos do projeto num arquivo .zip com seu numero de matricula
 * Ex.: 00100100.zip
 **/

session_start();

if (isset($_SESSION['usuario'])) {
    require_once("cabecalho.php");
    echo "<ul>";
    echo "<li>Cadastro</li>";
    echo "<ol>";
    echo "<li><a href='form_usuario.php'>Usuário</a></li>";
    echo "<li><a href='lista_usuarios.php'>ListaUsuários</a></li>";
    echo "</ol>";
    echo "</ul>";

    $usuario = $_SESSION['usuario'];

    
    echo "<hr>Usuário $usuario logado com sucesso!";
    echo "<br>Nome " . $_SESSION['nome'];
    echo "<br>Tipo de Pessoa " . $_SESSION['tipoPessoa'];
    echo "<br><hr>";
    require_once("rodape.php");
} else {
   header("location: login.php");
}

require_once("cabecalho.php");

?>

<div class="logo-outer">
  <div class="logo-middle">
    <div class="logo-inner">
      <img src="img/logo_compra.png">
    </div>
  </div>
</div>

<?php

require_once("rodape.php");

?>