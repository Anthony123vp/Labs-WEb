<?php

include('../Conexion/conexion.php');

// Obtenemos los valores del formulario
$nombre = $_POST['nombre'];
$ape_paterno= $_POST['ape_paterno'];
$ape_materno = $_POST['ape_materno'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "INSERT INTO USUARIO(nombre,ape_paterno,ape_materno,direccion,email,telefono,password)  VALUES ('$nombre','$ape_paterno','$ape_materno','$direccion','$email','$telefono','$password')";
$result = mysqli_query($conn, $sql);


// Cerramos la conexión a la base de datos
desconectar($conn);


?>