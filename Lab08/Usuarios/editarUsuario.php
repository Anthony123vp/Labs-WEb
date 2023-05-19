<?php 
include "../conexion/conexion.php";

//creamos la conexion
$conexion=conectar();

// Obtenemos los valores del formulario
$nombre = $_POST['nombre'];
$ape_paterno= $_POST['ape_paterno'];
$ape_materno = $_POST['ape_materno'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];

$id_filter= $_POST['id_usuario'];

//Realizamos la consulta
$sql="UPDATE USUARIO set nombre='$nombre',ape_paterno='$ape_paterno',ape_materno='$ape_materno',direccion='$direccion',email='$email',telefono='$telefono',password='$password' where idUsuario='$id_filter'";
$query=mysqli_query($conexion,$sql);
desconectar($conexion);
?>