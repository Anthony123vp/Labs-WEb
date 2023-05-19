<?php 
include "../conexion/conexion.php";

//creamos la conexion
$conexion=conectar();

// Obtenemos los valores del formulario
$usuario = $_POST['correo'];
$contraseña = $_POST['contraseña'];


//Realizamos la consulta
$sql = "SELECT * FROM USUARIO WHERE email='$usuario',password='$contraseña'";
$query=mysqli_query($conexion,$sql);
if($query){
    header("Location: ../producto.html");
}
desconectar($conexion);




?>