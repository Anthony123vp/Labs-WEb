<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUMNO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/estilos.css">
</head>

<body>

    <div class="card">
        <div class="card-header bg-dark text-white text-center">
            CREAR CURSO
        </div>
        <div class="card-body">
            <form action="CrearCurso.php" method="post">

                <div class="row g-3 mb-3 palign-items-center">
                    <div class="col-auto">
                        <label for="nombre" class="col-form-label">NOMBRE</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="NomCurso" id="nombre" class="form-control" aria-labelledby="passwordHelpInline" required>
                    </div>
                </div>
                <div class="row g-3 mb-3 align-items-center">
                    <select name="Profesores" class="form-select">
                    <?php 
                        include "../ConexionBD.php";
                        $conexion=Conectar();

                        $sql="SELECT * FROM Profesores";
                        $query=mysqli_query($conexion,$sql);


                        while($fila=mysqli_fetch_array($query)){
                            $id=$fila['id_Profesor'];
                            $nombre=$fila['nombre'];
                            $apellido=$fila['apellido'];
                            ?>
                            <option value="<?php echo $id;?>"><?php echo "$nombre"." $apellido" ?></option>
                            <?php
                        }
                    ?>
                    </select>
                </div>
                <input class="btn btn-primary d-grid gap-2 col-6 mx-auto" name="Agregar" type="submit" value="Agregar">

                <input type="reset" class="btn d-grid gap-2 col-6 mx-auto btn-danger mt-3 " value="Limpiar">
            </form>
        </div>
    </div><!--End Div Card-->
     <!--Start Our Table-->
     <div class="container bg-light">
        <h1 class="text-center">Listas clientes</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Profesor</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $sql2 = " SELECT * FROM admin_curso";
                $query2 = mysqli_query($conexion, $sql2);

                while ($fila = mysqli_fetch_array($query2)) {
                    ?>
                        <tr>
                            <td><?php echo $fila['nombre'] ?></td>
                            <td><?php echo $fila['profesor'] ?></td>
                            <td>
                                <a href="../Curso/EditarCurso.php?Id=<?php echo $fila['id_curso'] ?>" class="btn btn-primary">Editar</a>
                                <a href="EliminarCurso.php?Id=<?php echo $fila['id_curso'] ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php
                }
                Desconectar($conexion);
                ?>            
            </tbody>
        </table>
    </div>


</body>

</html>