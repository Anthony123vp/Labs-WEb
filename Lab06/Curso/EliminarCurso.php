<?php 
include "../ConexionBD.php";
$conexion=Conectar();
$id=$_REQUEST['Id'];
$sql="DELETE FROM curso WHERE id_curso='$id'";
$query=mysqli_query($conexion,$sql);
if  ($query){
    header("Location: curso.php");
    die();
    Desconectar($conexion);
}
?>