<?php

$server = "localhost";
$usuario = "root";
$pass = "";
$database = "practica";

$conn = mysqli_connect($server,$usuario,$pass,$database);

if(!$conn)
{
	die("No hay conexion:" .mysqli_connect_error());
}
?>
