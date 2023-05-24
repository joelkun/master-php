<?php
require_once '..\vendor\autoload.php';

$frutas = Array("manzanas","naranjas","sandias");

\FB::log($frutas);

$nombres= array ("ejecutivo" => "Antonio","empleado"=>"Juan");
\FB::log($nombres);
echo "Hola Mundo !!".$nombres['ejecutivo'];

\FB::log("Muestrame en consola");

?>