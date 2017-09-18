<?php 

$ano = date("Y");

echo "<select>";



for ($i=$ano; $i > $ano - 100; $i--) { 
	
	echo '<option value="'.$i.'">'.$i.'</option>';
}


echo "</select>";

?>