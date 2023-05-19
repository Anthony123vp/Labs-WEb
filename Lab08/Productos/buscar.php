<?php
include "../Conexion/Conexion.php";
$conex = conectar();


$nombre = $_POST['nombre'];


$sql = "SELECT * FROM PRODUCTO where nombre='$nombre'";

$result = mysqli_query($conex, $sql);
$valores ="";
while ($fila = mysqli_fetch_assoc($result)) {
    $valores = $valores . '<tr>' .
        '<td>' . $fila['nombre'] . '</td>' .
        '<td>' . $fila['descripcion'] . '</td>' .
        '<td>' . $fila['stock'] . '</td>' .
        '<td>' . $fila['precio_Venta'] . '</td>' .
        '<td>' .
        '<a href="javascript:eliminar_form(' . $fila['idProducto'] . ')" class="btn btn-primary">Eliminar</a>' .
        '<a href="javascript:editar_form(' . $fila['idProducto'] . ')" class="btn btn-primary">Editar</a>' .
        '</td>' .
        '</tr>';
}

// Cerramos la conexión a la base de datos
desconectar($conex);

echo $valores;
