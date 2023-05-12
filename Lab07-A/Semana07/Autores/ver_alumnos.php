<?php

include('../conexion/conexion.php');

// Obtenemos los valores del formulario

$valores = "";

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "SELECT * FROM autor";
$result = mysqli_query($conn, $sql);

while($crow = mysqli_fetch_assoc($result)){
	  $valores = $valores .'<tr>'.
	                         '<td>'.$crow['nombres'].'</td>'.
							 '<td>'.$crow['ape_paterno'].'</td>'.
							 '<td>'.$crow['ape_materno'].'</td>'.
							 '<td>'.
								'<i onclick="eliminar_form('.$crow['id'].')" class="pe pe-7s-trash text-accent"></i>&nbsp;&nbsp;'.
							    '<i onclick="editar_form('.$crow['id'].')" class="pe pe-7s-pen text-accent"></i>'.
							 '</td>'.
						   '</tr>';
}

// Cerramos la conexión a la base de datos
desconectar($conn);

echo $valores;

?>