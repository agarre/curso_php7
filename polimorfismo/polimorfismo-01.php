<?php 

interface Animal {

	public function falar();
	public function mover();
	
}

abstract class Mamiferos implements Animal {

	public function falar()
	{
		echo "Late";
	}

	public function mover()
	{
		echo "Anda";
	}
}

class Cachorro extends Mamiferos {
}

class Gato extends Mamiferos {

	public function falar()
	{
		echo "Mia";
	}
}
class Morcego extends Mamiferos {

	public function falar()
	{
		echo "Farfalha";
	}

	public function mover()
	{
		echo parent::mover() . " e " . "Voa";
	}
}


$toto = new Cachorro();

echo $toto->falar() . "<br>";
echo $toto->mover() . "<br>";

echo "--------------------<br>";

$mimi = new Gato();

echo $mimi->falar() . "<br>";
echo $mimi->mover() . "<br>";

echo "--------------------<br>";

$batman = new Morcego();

echo $batman->falar() . "<br>";
echo $batman->mover() . "<br>";

echo "--------------------<br>";
 ?>

