<?php 
/*
Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados (un numero multiplicado por si mismo) de los primeors 40 numero naturales.
PD: Utilizar bucle while.
*/
$numero=1;
while($numero<=40){
	$cuadrado=$numero*$numero;
	echo "<h3>El cuadrado de $numero es $cuadrado</h3>"; 
	$numero++;
}

for($i=1;$i<=40;$i++){
	$cuadrado=$i*$i;
	echo "<h3>El cuadrado de $numero es $cuadrado</h3>"; 
}



 ?>
