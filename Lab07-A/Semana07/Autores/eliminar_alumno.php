<?php 
include('../conexion/conexion.php');
$conn = conectar();
//Obtenemos el id del alumno para eliminar
$id=$_POST['id_alumno'];

//Realizamos la consulta para poder identificar al alumno y poder imprimir sus datos
$sqlfilter="SELECT * FROM AUTOR WHERE id='$id'";
$query=mysqli_query($conn,$sqlfilter);
while($row = mysqli_fetch_assoc($query)){
    $nombre=$row['nombres'];
    $ape_paterno = $row['ape_paterno'];
    $ape_materno = $row['ape_materno'];
};

//RealizamosConsulta para eliminar al Alumno
$sql = "DELETE FROM AUTOR WHERE id='$id'";
$query = mysqli_query($conn,$sql);
$msg = 'Alumno '.$nombre.' '.$ape_paterno.' '.$ape_materno.' Eliminado';
desconectar($conn);
echo $msg;
?>