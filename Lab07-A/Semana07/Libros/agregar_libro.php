<?php

include('../conexion/conexion.php');

// Obtenemos los valores del formulario

$año = $_POST['año'];
$autor = filter_input(INPUT_POST,'autor');
$titulo = $_POST['titulo'];
$url = $_POST['url'];
$especialidad = $_POST['especialidad'];
$editorial = $_POST['editorial'];
// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos

$sql = "INSERT INTO Libro (año,autor,titulo,url,especialidad,editorial) VALUES ('".$año."', '".$autor."', '".$titulo."','".$url."','".$especialidad."','".$editorial."')";
$result = mysqli_query($conn, $sql);


$mensaje = 'Titulo '.$titulo.' registrado';

// Cerramos la conexión a la base de datos
desconectar($conn);

echo $mensaje;

?>