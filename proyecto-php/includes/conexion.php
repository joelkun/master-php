<?php 
// Conexion
$server='localhost';
$username='root';
$password='';
$database='blog_master';

$db=mysqli_connect($server,$username,$password,$database);

mysqli_query($db,"SET NAMES 'utf8'");

// Iniciar la sessión
if(!isset($_SESSION)){
session_start();
}


?>