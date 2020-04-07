<?php

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {
	echo "Indice ".$index;
	echo "<br/>";
	echo "O mês é ".$mes;
	echo "<br/><br/>";
}

?>