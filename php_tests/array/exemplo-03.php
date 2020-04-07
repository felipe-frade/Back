<?php

$pessoas = array();

array_push($pessoas, array('nome' => 'João','idade'=>20));

array_push($pessoas, array('nome' => 'Felipe','idade'=>18));

print_r($pessoas);
echo "<br/>";
print_r($pessoas[0]);
echo "<br/>";
print_r($pessoas[0]['nome']);

?>