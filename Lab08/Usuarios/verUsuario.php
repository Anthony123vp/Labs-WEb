<?php
include "../Conexion/Conexion.php";
$conex = conectar();

$sql = "SELECT * FROM Usuario";
$result = mysqli_query($conex, $sql);
$valores ="";
while ($fila = mysqli_fetch_assoc($result)) {
    $valores = $valores . '<tr>' .
        '<td>' . $fila['nombre'] . '</td>' .
        '<td>' . $fila['ape_paterno'] . '</td>' .
        '<td>' . $fila['ape_materno'] . '</td>' .
        '<td>' . $fila['direccion'] . '</td>' .
        '<td>' . $fila['email'] . '</td>' .
        '<td>' . $fila['telefono'] . '</td>' .
        '<td>' . $fila['password'] . '</td>' .
        '<td>' .
        '<a href="javascript:eliminar_form(' . $fila['idUsuario'] . ')" class="btn btn-primary">Eliminar</a>' .
        '<a href="javascript:editar_form(' . $fila['idUsuario'] . ')" class="btn btn-primary">Editar</a>' .
        '</td>' .
        '</tr>';
}

// Cerramos la conexión a la base de datos
desconectar($conex);

echo $valores;
