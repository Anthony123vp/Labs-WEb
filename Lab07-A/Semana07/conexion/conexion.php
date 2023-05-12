<?php


function conectar(){
    $conn = mysqli_connect('localhost','root','','lab07');
    return $conn;
}

function desconectar($conexion){
    mysqli_close($conexion);
}


?>