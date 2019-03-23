<?php

function ola($texto = "mundo", $periodo = "Bom dia") {
    return "Olá $texto! $periodo!<br/>";
}

echo ola();
echo ola("Paulo", "Boa noite");
echo ola("João", "Boa tarde");

?>