<?php 
require_once 'clases.php';

$persona = new Persona();
$persona->setNombre("Joe");

var_dump($persona);

$informatico=new Informatico();
$informatico->setAltura(1.90);
echo $informatico->sabeLenguaje("PHP, Javascript, Python, etc"); 
var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);
 ?>