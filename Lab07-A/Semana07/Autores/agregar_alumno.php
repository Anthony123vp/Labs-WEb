<?php

include('../conexion/conexion.php');

// Obtenemos los valores del formulario
$nombres = $_POST['nombres'];
$ape_paterno = $_POST['ape_paterno'];
$ape_materno = $_POST['ape_materno'];

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "INSERT INTO AUTOR (nombres, ape_paterno, ape_materno) VALUES ('".$nombres."', '".$ape_paterno."', '".$ape_materno."')";
$result = mysqli_query($conn, $sql);


$mensaje = 'AUTOR '.$nombres.' '.$ape_paterno.' '.$ape_materno.' registrado';

// Cerramos la conexión a la base de datos
desconectar($conn);

echo $mensaje;

?>