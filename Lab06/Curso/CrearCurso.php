<?php 
include "../ConexionBD.php";
$conexion=Conectar();
if (isset($_POST["Agregar"])) {
    $nombre = $_POST["NomCurso"];
    $id = filter_input(INPUT_POST, 'Profesores');
    $sql = "INSERT INTO CURSO(nombre,profesor) VALUES ('$nombre','$id')";
    $query = mysqli_query($conexion, $sql);
    if  ($query){
        header("Location: curso.php");
        die();
        Desconectar($conexion);
    }
}

?>
