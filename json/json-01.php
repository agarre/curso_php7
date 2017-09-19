<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Yan',
	'idade'=>12,
	
));

array_push($pessoas, array(
	'nome'=>'Alyssa',
	'idade'=>13,
	
));

array_push($pessoas, array(
	'nome'=>'Ivani',
	'idade'=>63,
	
));

echo json_encode($pessoas);

 ?>