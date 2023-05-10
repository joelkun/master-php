<?php 
/*
Ejercio 4. Crear un script en php que tenga 4 variables, una de tipo array,
otra de tipo string, otra int y otra booleana y que imprima un mensaje
según el tipo de variable que sea.
*/

$texto='Nombre';
$numero=30;
$arreglo=[15,'ftp'];
$verificador=true;

if(is_array($arreglo)){
   echo "Este es un arreglo<br/>";
}
if(is_bool($verificador)){
   echo "Este es un booleano: $verificador<br/>";
}
if (is_string($texto)){
   echo "Este es un string: $texto<br/>";
}
if (is_numeric($numero)){
	echo "Este es un numero: $numero<br/>";
}


 ?>