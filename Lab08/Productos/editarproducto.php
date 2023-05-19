<?php 
include "../conexion/conexion.php";

//creamos la conexion
$conexion=conectar();

// Obtenemos los valores del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$precio_venta = $_POST['precio_venta'];

$id_filter= $_POST['id_producto'];

//Realizamos la consulta
$sql="UPDATE Producto set nombre='$nombre',descripcion='$descripcion',stock='$stock',precio_Venta='$precio_venta' where idProducto='$id_filter'";
$query=mysqli_query($conexion,$sql);
desconectar($conexion);
?>