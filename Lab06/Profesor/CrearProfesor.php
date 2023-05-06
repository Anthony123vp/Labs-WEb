<?php
include "../ConexionBD.php";

$conex = Conectar();

if (isset($_POST["Agregar"])) {
    $nombre = $_POST["NomProfesor"];
    $apellido = $_POST["ApeProfesor"];

    $sql = "INSERT INTO PROFESORES(nombre,apellido) VALUES ('$nombre','$apellido')";
    $query = mysqli_query($conex, $sql);

    if  ($query){
        header("Location: profesor.php");
        die();
        Desconectar($conex);
    }

}

?>