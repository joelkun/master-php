<?php 

/*
ARRAYS 
Un array es una coleccion o conjunto de datos/valores, bajo un unico nombre.
Para acceder a esos valores podemos usar un indice numero o alfanumerico.
*/

$pelicula='Batman';
$peliculas = array('Batman','Spiderman','El señor de los anillos');
$cantantes=['2pac','Drake','Jennifer Lopez'];
$personas=array(
	'nombre' => 'Jonathan',
	'apellidos'=>'Villon',
	'web'=>'jonathanvillon.com.ec'

);

var_dump($personas['apellidos']);
echo $personas['apellidos'];

echo '<br/>';

//var_dump($peliculas[1]);
//var_dump($cantantes);

echo $peliculas[0];
echo '<br/>';
echo $cantantes[2];
echo '<br/>';
// Recorer con FOR
echo "<h1>Listado de peliculas</h1>";
echo "<ul>";
for($i=0;$i<count($peliculas);$i++){
	echo '<li>'.$peliculas[$i].'</li>';
}
echo "</ul>";

// Recorrer con Foreach
echo "<h1>Listado de cantantes</h1>";
echo "<ul>";
foreach ($cantantes as $cantante) {
	echo '<li>'.$cantante.'</li>';

}
echo "</ul>";

// Arrays multimensionales

$contactos=array(
	array(
		'nombre'=>'Joel',
		'email'=>'joelvillongmail.com'

	),
	array(
		'nombre'=>'Jonathan',
		'email'=>'jonavillongmail.com'

	),

);
var_dump($contactos);

echo $contactos[1]['nombre'];

foreach ($contactos as $key => $contacto) {
	var_dump($contacto['nombre']);
}


 ?>