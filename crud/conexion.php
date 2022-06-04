<?php
function conectar(){
    $server="localhost";
    $usuario="root";
    $pass="";

    $database="crud";

    $con=mysqli_connect($server,$usuario,$pass);

    mysqli_select_db($con,$database);

    return $con;
}
?>
