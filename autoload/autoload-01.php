<?php 

function __autoload($nomeClasse){
	//var_dump($nomeClasse);
	require_once("$nomeClasse.php");

}

$carro = new Fusca();
$carro->frear(120);

 ?>

