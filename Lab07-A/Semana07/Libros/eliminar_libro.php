<?php 
include('../conexion/conexion.php');
$conn = conectar();
//Obtenemos el id del libro para eliminar
$id=$_POST['id_libro'];

//Realizamos la consulta para poder identificar al alumno y poder imprimir sus datos
$sqlfilter="SELECT * FROM libro WHERE id='$id'";
$query=mysqli_query($conn,$sqlfilter);
while($row = mysqli_fetch_assoc($query)){
    $titulo=$row['titulo'];
};

//RealizamosConsulta para eliminar al Alumno
$sql = "DELETE FROM LIBRO WHERE id='$id'";
$query = mysqli_query($conn,$sql);
$msg = 'Libro '.$titulo.' Eliminado';
desconectar($conn);
echo $msg;
?>