<?php 
include "../conexion/conexion.php";

//creamos la conexion
$conexion=conectar();

//conseguimos el id del autor a editar
$id_filter=$_POST['id_autor'];
$nombre=$_POST['nombres'];
$ape_materno=$_POST['ape_materno'];
$ape_paterno=$_POST['ape_paterno'];

//Realizamos la consulta
$sql="UPDATE autor set nombres='$nombre',ape_paterno='$ape_paterno',ape_materno='$ape_materno' where id='$id_filter'";
$query=mysqli_query($conexion,$sql);
$msg = "El autor ha sido Actualizado";
echo $msg;
?>