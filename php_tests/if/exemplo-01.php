<?php

$qualASuaIdade = 15;

$idadeCriaca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCriaca){
	echo "Você é uma criança";
} else if ($qualASuaIdade<$idadeMaior){
	echo "Adolescente";
} else if ($qualASuaIdade<$idadeMelhor){
	echo "Adulto";
} else {
	echo "idoso";
}

echo "<br/>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

?>