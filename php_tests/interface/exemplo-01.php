<?php

	interface Veiculo {

		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarmarcha($marcha);

	}

	class Civic implements veiculo{
		public function acelerar($velocidade){
			echo "Acelerou até ".$velocidade." km/h";
		}
		public function freiar($velocidade){
			echo "Frenou até ".$velocidade." km/h";
		}
		public function trocarmarcha($marcha){
			echo "Engatou ".$marcha;
		}
	}

$carro = new Civic();
echo "<br>";
$carro->freiar(4);
echo "<br>";
$carro->trocarmarcha(5);
?>