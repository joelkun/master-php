<?php 
/*
// CONDICONAL IF
IF:
 if(condicion){
	instrucciones
 }else{
	otras instrucciones
 }

 // Operadores de comparacion
== igual
=== identico
!= distinto o diferente
<> diferente
!== no identico
< menor que
> mayor que 
<= menor o igual
>= mayor o igual

// OPERADORES LOGICOS
&& AND Y
|| OR O
! NOT NO
and, or
 */
//Ejemplo1
$color="azul";

if ($color=="rojo") {
	echo "EL COLOR ES ROJO";
} else {
	echo "el color NO es rojo";
}
echo "<br>";

//Ejemplo2
$year=2018;
if($year < 2023){
	echo "Es un año anterior a 2023";
} else{
	echo "Es un año posterior a 2023";
}
echo "<br>";

if($year != 2023){
	echo "Es un año diferente a 2023";
} else{
	echo "Estamos en 2023";
}

//Ejemplo3
$nombre="Jonathan Villon";
$edad=30;
$mayoria_edad=18;
$ciudad="Panamá";
$continente="America Central";

if ($edad>=$mayoria_edad){
   echo '<h1>'.$nombre.' es mayor de edad </h1>';
   if($continente=="Europa"){
   echo '<h2> Y es de '.$ciudad.' </h2>';
   } else {
   	echo "No es Europeo";
   }
}else 
{
	echo '<h2>'.$nombre.' no es mayor de edad </h2>';
}
echo '<hr>';
//Ejemplo4
$dia=3;
/*
if($dia==1){
	echo "Es Lunes";
} else{
	if($dia==2){
		echo "Es Martes";
	}
	else{
		if ($dia=3){
			echo "Es Miercoles";
		}
	} 

}*/
if($dia==1){
	echo "LUNES";
}elseif ($dia==2) {
	echo "MARTES";
}elseif ($dia==3){
	echo "MIERCOLES";
}elseif ($dia==4) {
	echo "JUEVES";
}elseif($dia==5){
	echo "VIERNES";
}else{
	echo "Es finde";
}
echo '<hr>';
//Ejemplo5
$edad1=18;
$edad2=64;
$edad_oficial=30;

if($edad_oficial>=$edad1 && $edad_oficial<=$edad2){
	echo "ESTA EN EDAD DE TRABAJAR";
} else{
	echo "NO PUEDE TRABAJAR";
}

echo '<hr>';
$pais = "Ecuador";
if ($pais=="Mexico" || $pais=="España" || $pais=="Colombia" || $pais=="Ecuador" ){
	echo "En este país se habla español";
} else {
	echo "En este país No se habla español";
}

echo '<hr>';

// SWITCH
$dia=4;

switch($dia){
	case 1: 
		echo "Lunes";
		break;
	case 2: 
		echo "Martes";
		break;
	case 3: 
		echo "Miercoles";
		break;
	case 4: 
		echo "Jueves";
		break;
	case 5: 
		echo "Viernes";
		break;
	default:
		echo "ES FIN DE SEMANA";
}

echo '<hr>';
// GOTO
goto marca;
echo "<h3> Instruccion1</h3>";
echo "<h3> Instruccion2</h3>";
echo "<h3> Instruccion3</h3>";
echo "<h3> Instruccion4</h3>";

marca:
echo "<h1>Me he saltado 4 echos</h1>";

 ?>