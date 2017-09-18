<?php

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

echo "<br>";

$frase = "A repeticao e a mae da retencao.";

$q = strrpos($frase, "mae");

var_dump($q);

echo "<br>";

$texto = substr($frase, 0, $q);

var_dump($texto);

echo "<br>";



?>