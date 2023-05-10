<?php 

/* BUCLE WHILE
Estructura de control que itera o repite la ejecuciòn de una serie de instrucciones
tantas veces como sea necesario, en base a una condición.

while(condicion){
	bloque de instrucciones
}



*/

$numero=0;
while($numero<=100){
	echo $numero;
	if($numero !=100){
		echo ", ";
	}
	$numero++;
}

//Ejemplo

if(isset($_GET['numero']))
{
	//Cambiar tipo de dato
	$numero =(int)$_GET['numero'];
}else{
	$numero=1;
}
//var_dump($numero);
echo "<h1>Tabla de multiplicar del nùmero $numero</h1>";
$contador=0;
while($contador<=10){
	echo "$numero x $contador= ".($numero*$contador)."<br/>";
	$contador++;
}

/* DO WHILE 
do{
   // BLOQUE DE INSTRUCCIONES
}while(condicion)
*/
$edad=18;
$contador=1;
do{
   echo "Tienes acceso al local privado $contador";
   echo "<br>";
   $contador++;
}while($edad>=18 && $contador<=10);


?>