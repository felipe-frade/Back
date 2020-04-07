<?php

interface Veiculo {

	public function marca($nome);
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarmarcha($marcha);

}

abstract class Automovel implements veiculo{
	public function marca($nome){
		echo "A marca é ".$nome;
	}
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
?>