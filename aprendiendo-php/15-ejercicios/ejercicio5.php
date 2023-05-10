<?php 
/*
Crear un array con el contenido de la tabla:
ACCION AVENTURA DEPORTES
GTA ASSASINS FIFA
COD CRASH PES 19
PUGB PRINCE OF PERSIA MOTO GP 19

Cada columna debe ir en un fichero separado(includes).
*/
$tabla= array(
   "ACCION" => array("GTA","COD","PUBG"),
   "AVENTURA" => array("Assasins Creed", "Crash Bandicoot", "Prince of Persia"),
   "DEPORTES" => array("FIFA","PES19","MOTO GP 19"),
);

$categorias=array_keys($tabla);
 ?>
<table border="1">
<?php include_once 'ejercicio5/encabezados.php';?>
<?php include_once 'ejercicio5/primera.php';?>
<?php include_once 'ejercicio5/segunda.php';?>
<?php include_once 'ejercicio5/tercera.php';?>

</table>



 
 	 
 	 
 	  