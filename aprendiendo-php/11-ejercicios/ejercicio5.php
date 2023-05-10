<?php 
/*
Ejercicio 5. Hacer un programa que muestre todos los numero entre 2 numeros
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
	echo $i.'<br/>';
}
}else{
	echo "El numero 1 debe ser menor al numero 2";
}

 ?>
