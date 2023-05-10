<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Imprimir por pantalla - Master en PHP</title>
</head>
<body>
	<h1>Master en php </h1>

	<?="Bienvenido al curso más grande de PHP"?>
	<?php 
	//Titular de la sección
	echo "<h3>Listados de videojuegos:</h3>";
    
	/*
	Esta es una lista
	de videojuegos
	modernos
	*/

    echo "<ul>"
    ."<li>GTA</li>"
    ."<li>Fifa</li>"
    ."<li>Mario Bros</li>"
    ."</ul>";

    // echo "<br> HOLA HOLA HOLA<br>";

    //Parrafo explicativo
    echo '<p>Esta es toda'.' - '.'lista de juegos</p>';

	 ?>
	
</body>
</html>