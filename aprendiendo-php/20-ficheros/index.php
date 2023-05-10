<?php 
/*
// Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

// Leer contenido
while (!feof($archivo)) {
	$contenido = fgets($archivo);
	echo $contenido.'<br/>';
}

// Escribit 
fwrite($archivo,"Soy un texto metido desde php");


//Cerrar archivo
fclose($archivo);*/


// Copiar
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");


// Renombrar
//rename('fichero_copiado.txt', 'archivo_copiado.txt');

// Eliminar
//unlink('archivo_copiado.txt') or die("Error al borrar");

if(file_exists("fichero_texto.txt")){
	echo "El archivo existe!!";
} else{
	echo "No existe";
}




?>