<?php 
/*
Ejercicio 3. Programa que compruebe si una variable esta vacia y si está vacia,
rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita.
*/
$variable='';
if(empty($variable)){
	$variable='jonaThan';
	strtolower($variable);
	$Mayus=strtoupper($variable);
	echo "<strong>$Mayus</strong>";
} else {
	echo "La variable tiene este contenido dentro: ".$variable;

}




 ?>