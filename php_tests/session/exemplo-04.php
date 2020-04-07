<?php

session_id('pfbaqmuftsmhti82g0u9d4jtl3array');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>