<?php 

$json = '
[{"nome":"Yan","idade":12},{"nome":"Alyssa","idade":13},{"nome":"Ivani","idade":63}]';

$data = json_decode($json, true);

var_dump($data);
 ?>