<?php 
namespace Cliente;

class Cadastro extends \Cadastro {

	public function registrarVendas(){

		echo "Venda efetuada para o cliente : " . $this->getNome();
	}
}

 ?>