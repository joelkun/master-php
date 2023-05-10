<?php
// Constantes
// Es un contenedor de información que no puede variar

define('nombre','Jonathan Villón');
define('web','jonathanvillon.ec');


echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';


// variables
$web="jonathanvillon.ec/academy";
$web="jonathanvillon.ec/cursos";
echo '<h1>'.$web.'</h1>';

// Constantes predefinidas

echo PHP_OS;
echo PHP_VERSION;
echo PHP_EXTENSION_DIR;
echo __LINE__;
echo __FILE__;
echo __FUNCTION__;

?>