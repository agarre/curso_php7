<?php

$nome1 = "Hugo";

$nome2 = "Yan";

echo "eu $nome1 e $nome2";

echo "<br>";

$nome1 = strtolower($nome1." ".$nome2);

echo $nome1;

echo "<br>";

$nome1 = strtolower($nome1);

echo $nome1;

echo "<br>";

$nome1 = ucwords($nome1);

echo "$nome1";
?>