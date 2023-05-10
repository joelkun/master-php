<?php 

/*
Ejercicio 6. Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10.
*/
echo "<table border='1'> <tr>";//inicio
echo "<tr>";// inicio fila 1 de celdas
for($cabecera=1;$cabecera<=10;$cabecera++){
    echo "<td>Tabla del $cabecera</td>";
}
echo "</tr>";
echo "<tr>";// inicio fila 1 de celdas
for($detalle=1;$detalle<=10;$detalle++){
    echo '<td>';
    for ($i=0; $i <= 10; $i++) { 
    	echo $detalle.' x '.$i.' = '.($detalle*$i).'<br>';
    }
    echo '</td>';
}
echo "</tr>";

echo "</table>";//fin



 ?>