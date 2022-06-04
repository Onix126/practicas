<?php

include("conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$carnet=$_POST['carnet'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE alumno SET carnet='$carnet', nombres='$nombres', apellidos='$apellidos' WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>