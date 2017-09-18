<?php 

$idade = 65;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;


if ($idade <= $idadeCrianca) {
	
	echo "Criança";
}

elseif ($idade > $idadeCrianca && $idade < $idadeMaior) {
	
	echo "Adolescente";
}

elseif ($idade >= $idadeMaior && $idade < $idadeIdoso) {
	
	echo "Adulto";
}

else {

	echo "Idoso"; 
};
 ?>
