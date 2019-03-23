<?php

session_id('5c0cjl4dt3csb67d26u56987c4');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>