<?php 

spl_autoload_register("incluirClasses");
function incluirClasses($nomeClasse){

	if (file_exists($nomeClasse . ".php") === true){

		require_once($nomeClasse . ".php");
	}
}

spl_autoload_register(function($nomeClasse){

	if (file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true) {
		require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
	}
});



$carro = new Fusca();
$carro->frear(120);

 ?>

