<?php

$valor = 0;

$valor += 100; // soma 100 a variavel

$valor -= 10; 

$valor *= .9; //calcula 90% da variavel (desconto 10%)


function total()
{
	global $valor;

	echo $valor;
}

total();


?>