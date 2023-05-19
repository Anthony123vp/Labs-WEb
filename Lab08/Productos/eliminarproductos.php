<?php 
include('../Conexion/Conexion.php');
$conn = conectar();
//Obtenemos el id del alumno para eliminar
$id=$_POST['idProducto'];

//Realizamos la consulta para poder identificar al alumno y poder imprimir sus datos
$sql = "DELETE FROM PRODUCTO WHERE idProducto='$id'";
$query=mysqli_query($conn,$sql);

desconectar($conn);
?>