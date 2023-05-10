<?php 
$cantantes=['2pac','Drake','Jennifer Lopez','Annuel'];

$numeros=[1,2,5,8,3,4];

asort($cantantes);
var_dump($cantantes);

sort($numeros);
var_dump($numeros);

arsort($cantantes);

//Añadir elementos array
$cantantes[]="Natos";
array_push($cantantes, "Waor");

// Eliminar elementos array
array_pop($cantantes);
unset($cantantes[2]);

// Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// Dar la vuelta
var_dump(array_reverse($numeros));

// Buscar en un array
$resultado=array_search('Drake', $cantantes);
var_dump($resultado);

// Contar numero de elementos
echo count($cantantes);
echo sizeof($cantantes);



var_dump($cantantes);


 ?>