<?php 
/*FOR
for(expresion inicial, condicion, incremento contador)
{
	Bloque de instrucciones
}
*/

$resultado=0;
for($i=0;$i<=100;$i++){
	//$resultado=$resultado+$i;
	$resultado +=$i;
}

echo "<h1>El resultado es: $resultado</h1>";

if(isset($_GET['numero']))
{
	//Cambiar tipo de dato
	$numero =(int)$_GET['numero'];
}else{
	$numero=1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

for($contador=1;$contador<=10;$contador++){
	if($numero==45){
		echo "No se pueden mostrar estas operaciones";
		break;
	}
	echo "$numero x $contador= ".($numero*$contador)."<br/>";
}





 ?>
