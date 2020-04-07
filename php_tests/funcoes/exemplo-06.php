<?php

$pessoa = array(
	'nome' => 'felipe',
	'idade' => 18
	);

foreach ($pessoa as &$value) {
	if (gettype($value)==='integer') $value +=10;
	echo $value."<br>";
}

print_r($pessoa);
?>