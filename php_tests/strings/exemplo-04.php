<?php

$frase = "A repetição é a mãe da retenção";
$palavra = "mãe";
$q = strpos($frase, $palavra);
$texto = substr($frase, 0, $q);
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($q);
echo "<br/>"."$texto"."<br/>";
echo "$texto2";
?>