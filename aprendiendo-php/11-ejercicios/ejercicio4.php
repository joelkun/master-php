<?php 
/*
Ejercicio 4. Recoger dos numeros por la url(Parametros GET) y hacer todas las operaciones
basicas de una calculadora (suma, resta, multiplicacion y division)
de esos dos numeros.
*/
if(isset($_GET['num1'])){
	$num1 =(int)$_GET['num1'];
}else{
	$num1=4;
}

if(isset($_GET['num2'])){
	$num2 =(int)$_GET['num2'];
}else{
	$num2=2;
}

echo 'La suma de '.$num1.' + '.$num2.' es igual a '.($num1+$num2).'<br/>';
echo 'La resta de '.$num1.' - '.$num2.' es igual a '.($num1-$num2).'<br/>';
echo 'La multiplicación de '.$num1.' * '.$num2.' es igual a '.($num1*$num2).'<br/>';
echo 'La división de '.$num1.' / '.$num2.' es igual a '.($num1/$num2).'<br/>';







 ?>