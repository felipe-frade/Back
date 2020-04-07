<?php

	interface Pessoa{
		public function raca($raca="humana");
		public function nome($nome);
		public function falar($frase);
	}

	abstract class humano implements Pessoa{
		public function raca($raca="humana"){
			echo "Raça ".$raca;
		}
		public function nome($nome){
			echo $nome;
		}
		public function falar($frase){
			echo $frase;
		}
	}

	class Mulher extends humano{

	}

	class Homem extends humano{
		
	}

	$felipe=new Homem();
	$felipe->nome("Felipe Frade, ");
	$felipe->raca();
	echo ". ";
	$felipe->falar("Diz olá");

	echo "<br><br>";

	$maria=new Mulher();
	$maria->nome("Maria, ");
	$maria->raca("canina");
	echo ". ";
	$maria->falar("Diz auau");

?>