<?php

require_once("config.php");

session_unset($_SESSION['nome']); // apenas limpa suas informações de usuário

echo $_SESSION['nome'];

session_destroy() // destroy o usuário


?>