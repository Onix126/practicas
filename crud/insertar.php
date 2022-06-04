<?php
include("conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$carnet=$_POST['carnet'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO alumno VALUES('$codigo','$carnet','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>