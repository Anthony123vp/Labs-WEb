<?php
include "../ConexionBD.php";
$conex=Conectar();

if (isset($_POST["Agregar"])){
    $alumno=filter_input(INPUT_POST, 'Alumnos');
    $curso=filter_input(INPUT_POST, 'Cursos');
    
    $sql="INSERT INTO matricula(alumno,curso)VALUES('$alumno','$curso')";
    $query=mysqli_query($conex,$sql);
    if  ($query){
        Desconectar($conex);
        header("Location: matricula.php");
        die();
    }
}

?>