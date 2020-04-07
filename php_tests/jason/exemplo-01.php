<?php

$pessoas = array();

array_push($pessoas, array('nome' => 'João','idade'=>20));

array_push($pessoas, array('nome' => 'Felipe','idade'=>18));

echo json_encode($pessoas);

?>