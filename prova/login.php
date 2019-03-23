<!DOCTYPE html>
<html>
<!--
/**
 * Prova Desenvolvimento de Sistema com PHP
 * Univerdade positivo
 * compactar todos os arquivos do projeto num arquivo .zip com seu numero de matricula
 * Ex.: 00100100.zip
 **/
 -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {
    border: 3px solid #f1f1f1;
    border-radius: 15px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

.loginbox {
    width: 300px;
    margin-left: auto;
    margin-right: auto;
}

.titlecenter {
    text-align: center;
    width: 100%;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<div class="loginbox">
<h2 class="titlecenter">Clientes e Produtos</h2>

<form action="sistema.php">
  <div class="imgcontainer">
    <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="usuario"><b>Usuário</b></label>
    <input type="text" placeholder="Entre com o usuário" name="usuario" required>

    <label for="senha"><b>Senha</b></label>
    <input type="password" placeholder="Entre com a senha" name="senha" required>
        
    <button type="submit">Entrar</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancelar</button>
    <span class="psw">Esqueceu a <a href="#">senha?</a></span>
  </div>
</form>
</div>

</body>
</html>