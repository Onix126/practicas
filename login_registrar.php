<?php 

require 'conexion.php';

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

if(isset ($_POST['btningresar'])){
$query = mysqli_query ($conn, "SELECT * FROM login WHERE usuario = '$usuario' AND password = '$pass' ");
$row = mysqli_num_rows($query);
if($row==1){
    echo "<script>alert('Bienvenido: $usuario'); window.location = 'principal.html'</script>";
}else
    echo "<script>alert('Credenciales incorrectas'); window.location = 'index.html'</script>";
}

if(isset ($_POST['btnregistrar'])){
    $guardar = "INSERT INTO login (usuario, password) values ('$usuario', '$pass')";
if(mysqli_query($conn, $guardar)){
    echo "<script>alert('Usuario registrado correctamente: $usuario'); window.location = 'index.html'</script>";
}else
    echo "Error: ".$guardar."<br>".mysql_error($conn);

}

?>