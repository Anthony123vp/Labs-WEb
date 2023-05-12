<?php 
include "../conexion/conexion.php";

//creamos la conexion
$conexion=conectar();

//conseguimos el id del autor a editar
$id_filter=$_POST['id_libro'];
$año = $_POST['año'];
$autor = filter_input(INPUT_POST,'autor');
$titulo = $_POST['titulo'];
$especialidad = $_POST['especialidad'];
$editorial  = $_POST['editorial'];
$url = $_POST['url'];

//Realizamos la consulta
$sql="UPDATE libro set año='$año',autor='$autor',titulo='$titulo',url='$url',especialidad='$especialidad',editorial='$editorial' where id='$id_filter'";
$query=mysqli_query($conexion,$sql);
$msg = "El libro ha sido Actualizado";
echo $msg;
?>