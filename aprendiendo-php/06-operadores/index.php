<?php 

// Operadores aritméticos
$numero1=55;
$numero2=33;

echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Multiplicación: '.($numero1*$numero2).'<br/>';
echo 'División: '.($numero1/$numero2).'<br/>';
echo 'Modulo o Resto: '.($numero1%$numero2).'<br/>';

//Operadores incremento y decremento
$year = 2019;


//Incremento
//$year=$year+1;
$year++;
//Decremento
//$year=$year-1;
$year--;
//Pre-Incremento
//$year=1+$year;
++$year;

//Pre-Decremento
//$year=1+$year;
--$year;

echo '<h1>'.$year.'</h1>';

// Operadores de asignación
$edad=30;

echo $edad.'<br>';


echo ($edad+=5);
echo '<br>';
echo ($edad/=5);








 ?>