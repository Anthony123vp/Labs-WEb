<?php 
include "../ConexionBD.php";
$a=Conectar();
$id=$_REQUEST['Id'];
$sql="DELETE FROM MATRICULA WHERE id_Matricula='$id'";
$query=mysqli_query($a,$sql);
if  ($query){
    Desconectar($a);
    header("Location: matricula.php");
    die();
}
?>