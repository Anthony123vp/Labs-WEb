<?php
include "../conexion/conexion.php";
$conexion = conectar();

$sql = "SELECT * FROM Autor";
$query = mysqli_query($conexion, $sql);
$mensaje="";

while ($fila = mysqli_fetch_assoc($query)) {
    $id = $fila['id'];
    $nombre = $fila['nombres'];
    $ape_paterno = $fila['ape_paterno'];
    $ape_materno = $fila['ape_materno'];
    $mensaje=$mensaje.'<option value="'.$id.'">'.$nombre.' '.$ape_paterno.'</option>';

}

echo $mensaje;

?>