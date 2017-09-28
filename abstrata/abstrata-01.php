<?php 

interface Veiculo {

	public function acelerar($acelerar);
	public function frear($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

	public function acelerar($acelerar)
	{

		echo "Veículo acelerou até: " . $acelerar . "km/h";

	}

	public function frear($velocidade)
	{

		echo "Veículo estava em: " . $velocidade . "km/h, quando freou.";

	}

	public function trocarMarcha($marcha)
	{

		echo "A marcha selecionada é: " . $marcha;

	}


}

class Fusca extends Automovel {

	public function nitro()
	{


	}

}


$carro = new Fusca(); 
$carro->acelerar(200);
 ?>
