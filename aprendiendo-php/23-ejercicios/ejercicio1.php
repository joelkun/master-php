<?php 
/*
Ejercicio 1. Crear una sesión que aumente su valor en uno o dismuya en uno 
en función de si el parametro get counter está a uno o a cero.
*/
session_start();
if (!isset($_SESSION['contador'])) {
	$_SESSION['contador']=0;

}

/*if (isset($_GET['counter'])){
	$contador=$_GET['counter'];
	if ($contador==0){
       $_SESSION['contador']--;
	} else{
		$_SESSION['contador']++;
	}
}*/

if (isset($_GET['counter']) && $_GET['counter']==0){
	$_SESSION['contador']--;
}
if (isset($_GET['counter']) && $_GET['counter']==1){
	$_SESSION['contador']++;
}



//echo $_SESSION['contador'];




 ?>
<h1>El valor de la sesión es: <?=$_SESSION['contador']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>
