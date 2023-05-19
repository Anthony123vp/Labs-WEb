<?php 
include('../Conexion/Conexion.php');
$conn = conectar();
//Obtenemos el id del alumno para eliminar
$id=$_POST['idUsuario'];

//Realizamos la consulta para poder identificar al alumno y poder imprimir sus datos
$sql = "DELETE FROM USUARIO WHERE idUsuario='$id'";
$query=mysqli_query($conn,$sql);

desconectar($conn);
?>