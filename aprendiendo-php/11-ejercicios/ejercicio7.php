<?php 
/*
Ejercicio 7. Hacer un programa que muestre todos los numero impares y pares entre 2 numeros
que nos lleguen por la URL($_GET)

*/
if(isset($_GET['num1']) && isset($_GET['num2']) ){
   $numero1=$_GET['num1'];
   $numero2=$_GET['num2'];
} 
else{
	$numero1=4;
	$numero2=10;
}

if ($numero1<$numero2){
for($i=$numero1;$i<=$numero2;$i++){
	if($i%2!=0){
	  echo $i.' es IMPAR<br/>';	
	}else 
	echo $i.' es PAR<br/>';	
	
}
}else{
	echo "El numero 1 debe ser menor al numero 2";
}

 ?>
