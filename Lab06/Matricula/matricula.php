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
            MATRICULAR ALUMNO
        </div>
        <div class="card-body">
            <form action="CrearMatricula.php" method="post">

                <div class="row g-3 mb-3 palign-items-center">
                    <select class="form-select" name="Alumnos">
                        <option selected>Seleccionar Alumno</option>
                        <?php
                            include "../ConexionBD.php";
                            $c = Conectar();

                            $sqlAlumno = "SELECT * FROM Alumnos";
                            $queryAlumno = mysqli_query($c, $sqlAlumno);


                            while ($fila = mysqli_fetch_array($queryAlumno)) {
                                $idAlumno = $fila['id_Alumno'];
                                $nombre = $fila['nombre'];
                                $apellido = $fila['apellido'];
                            ?>
                                <option value="<?php echo $idAlumno; ?>"><?php echo "$nombre" . " $apellido" ?></option>
                            <?php
                        }

                        ?>
                    </select>
                </div>
                <div class="row g-3 mb-3 align-items-center">
                    <select name="Cursos" class="form-select">
                        <option selected>Seleccionar Curso</option>
                        <?php

                            $sqlCurso = "SELECT * FROM Curso";
                            $queryCurso = mysqli_query($c, $sqlCurso);


                            while ($fila = mysqli_fetch_array($queryCurso)) {
                                $idCurso = $fila['id_Curso'];
                                $nombre = $fila['nombre'];
                            ?>
                                <option value="<?php echo $idCurso; ?>"><?php echo "$nombre" ?></option>
                            <?php

                            }

                        ?>
                    </select>
                </div>
                <input class="btn btn-primary d-grid gap-2 col-6 mx-auto" name="Agregar" type="submit" value="Agregar">
            </form>
        </div>
    </div><!--End Div Card-->

    <!--Start Our Table-->
    <div class="container bg-light">
        <h1 class="text-center">Lista de Matriculas</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Alumno</th>
                    <th scope="col">Curso</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql2 = "SELECT  matricula.id_Matricula,alumnos.nombre AS alumno,curso.nombre AS curso FROM matricula INNER JOIN alumnos ON matricula.alumno=alumnos.id_Alumno 
                    INNER JOIN curso ON matricula.curso=curso.id_Curso";
                $query2 = mysqli_query($c, $sql2);


                while ($fila = mysqli_fetch_array($query2)) {
                ?>
                    <tr>
                        <td><?php echo $fila['id_Matricula'] ?></td>
                        <td><?php echo $fila['alumno'] ?></td>
                        <td><?php echo $fila['curso'] ?></td>
                        <td>
                            <a href="EditarMatricula.php?Id=<?php echo $fila['id_Matricula'] ?>" class="btn btn-primary">Editar</a>
                            <a href="EliminarMatricula.php?Id=<?php echo $fila['id_Matricula'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                Desconectar($c);


                ?>
            </tbody>
        </table>
    </div>

</body>

</html>