<?php 
include "../conexion/conexion.php";

// Obtenemos los valores del formulario

$valores = "";

// Abrimos la conexión a la base de datos
$conn = conectar();

// Consulta a la base de datos
$sql = "SELECT libro.id,año,CONCAT(autor.nombres,' ',autor.ape_paterno) AS autor,libro.titulo,libro.url,libro.especialidad,libro.editorial FROM libro INNER JOIN autor ON autor.id=libro.autor";

$result = mysqli_query($conn, $sql);

while($crow = mysqli_fetch_assoc($result)){
	  $valores = $valores .'<tr>'.
	                         '<td>'.$crow['año'].'</td>'.
							 '<td>'.$crow['autor'].'</td>'.
                             '<td>'.$crow['titulo'].'</td>'.
                             '<td>'.'<a href="'.$crow['url'].'" target="_blank">Link</a></td>'.
							 '<td>'.$crow['especialidad'].'</td>'.
							 '<td>'.$crow['editorial'].'</td>'.
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