<?php 
/*
Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 numeros enteros
y que haga lo siguiente:
- Recorrerlo y mostrarlo
- Ordenarlo y mostrarlo
- Mostrar su longitud
- Buscar algun elemento (buscar por el parametro de la url)

*/

//funcion
function mostrarArray($numeros){
	$resultado="";
	foreach ($numeros as $numero) {
	$resultado .=$numero."<br/>";
}
    return $resultado;
}

// Crear el array

$numeros =[1,4,5,8,10,12,15,7];

// Recorrer y mostrar
echo "<h1>Recorrer y mostrar</h1>";	
echo mostrarArray($numeros);

// Ordenarlo y mostrarlo
echo "<h1>Ordenar y mostar</h1>";
asort($numeros);
echo mostrarArray($numeros);

// Mostrar su longitud
echo "<h1>Mostrar su longitud</h1>";
echo count($numeros);

// Buscar algun elemento

if(isset($_GET['numero'])){
   $busqueda=$_GET['numero'];
}
else{
    $busqueda=5;
}
echo "<h1>Buscar en el array el número $busqueda</h1>";

$search=array_search($busqueda, $numeros);
if(!empty($search)){
 echo "<h4>El numero buscado existe en el array, en el indice: $search</h4>";
}
else{
	echo "No existe el número buscado";

	}
var_dump($search);


 ?>