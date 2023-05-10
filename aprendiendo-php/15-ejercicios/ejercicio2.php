<?php 
/*
Ejercico 2. Escribir un programa con PHP que añada valores a un array mientras que su
longuitud sea menor a 120 y luego mostralo por pantalla
*/

$numeros=[4,5];
for ($i=0;$i<=120;$i++){
	if(count($numeros)==120){
	
	} else{
		$numeros[].=rand(1,500);
	}
}

foreach ($numeros as $numero) {
	echo $numero.'<br>';
}

var_dump($numeros);



 ?>