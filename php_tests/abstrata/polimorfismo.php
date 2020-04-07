<?php

abstract class animal {

	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Anda";
	}

}

class Cachorro extends Animal {

	public function falar(){
		return "late";
	}

}

class Gato extends Animal {
	public function falar(){
		return "mia";
	}
}

class Passaro extends Animal {
	public function falar(){
		return "canta";
	}
	public function mover(){
		return "Voa e ".parent::mover();
	}
}

$pluto = new Cachorro;
echo $pluto->falar();
echo "<br>";
echo $pluto->mover();
echo "<br>";

echo "******<br>";

$garfild = new Gato;
echo $garfild->falar();
echo "<br>";
echo $garfild->mover();
echo "<br>";

echo "******<br>";

$ave = new Passaro;
echo $ave->falar();
echo "<br>";
echo $ave->mover();
echo "<br>";

?>