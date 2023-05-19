<?php

include('../Conexion/conexion.php');

// Obtenemos los valores del formulario
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$precio_venta = $_POST['precio_venta'];

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "INSERT INTO PRODUCTO(nombre,descripcion,stock,precio_Venta) VALUES ('".$nombre."', '".$descripcion."', '".$stock."','".$precio_venta."')";
$result = mysqli_query($conn, $sql);


// Cerramos la conexión a la base de datos
desconectar($conn);


?>