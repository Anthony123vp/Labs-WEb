<?php
include "../ConexionBD.php";
$conex=Conectar();
if (isset($_POST["Agregar"])) {
    $nombre = $_POST["NomAlumno"];
    $apellido = $_POST["ApeAlumno"];

    $sql = "INSERT INTO ALUMNOS(nombre,apellido) VALUES ('$nombre','$apellido')";
    $query = mysqli_query($conex, $sql);
    if  ($query){
        Desconectar($conex);
        header("Location: alumno.php");
        die();
    }
}

?>