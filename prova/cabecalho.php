<!DOCTYPE html>
<html>
<head>
<!--
/**
 * Prova Desenvolvimento de Sistema com PHP
 * Univerdade positivo
 * compactar todos os arquivos do projeto num arquivo .zip com seu numero de matricula
 * Ex.: 00100100.zip
 **/
 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="navbar">
  <a class="active" href="menu.php"><i class="fa fa-fw fa-user"></i> <?php echo $_SESSION['usuario']; ?></a> 
  <a href="lista_usuarios.php"><i class="fa fa-fw fa-address-card"></i> Usuários</a> 
  <a href="lista_produtos.php"><i class="fa fa-fw fa-dropbox"></i> Produtos</a> 
  <a href="logoff.php"><i class="fa fa-fw fa-sign-out"></i> Sair</a>
</div>