<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Hugo Breda");
$cad->setEmail("hbreda@gmail.com");
$cad->setSenha("123456");

echo $cad->registrarVendas();

 ?>