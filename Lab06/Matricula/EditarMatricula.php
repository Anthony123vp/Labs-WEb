<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/estilos.css">
</head>

<body>
    <div class="card">
        <div class="card-header bg-dark text-white text-center">
            EDITAR MATRICULA
        </div>
        <div class="card-body">
            <form action="" method="post">

                <div class="row g-3 mb-3 palign-items-center">
                    <select class="form-select" name="Alumnos">
                        <option selected>Seleccionar Alumno</option>
                        <?php
                        include "../ConexionBD.php";
                        $c = Conectar();

                        $sqlAlumno = "SELECT * FROM Alumnos ";
                        $queryAlumno = mysqli_query($c, $sqlAlumno);


                        while ($fila = mysqli_fetch_array($queryAlumno)) {
                            $idAlumno = $fila['id_Alumno'];
                            $nombreAlumno = $fila['nombre'];
                            $apellidoAlumno = $fila['apellido'];
                            echo "<option value='$idAlumno'>$nombreAlumno $apellidoAlumno</option>";
                            
                        
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
                            $nombreCurso = $fila['nombre'];
                        ?>
                            <option value="<?php echo $idCurso; ?>"><?php echo "$nombreCurso" ?></option>
                        <?php

                        }

                        ?>
                    </select>
                </div>
                <input class="btn btn-primary d-grid gap-2 col-6 mx-auto" name="Editar" type="submit" value="Editar">
            </form>
        </div>
    </div><!--End Div Card-->


    <?php
    if (isset($_POST['Editar'])) {

        $alumno = filter_input(INPUT_POST, 'Alumnos');
        $curso = filter_input(INPUT_POST, 'Cursos');
        $idFiltro = $_REQUEST['Id'];
        $sql = "UPDATE MATRICULA set alumno='$alumno',curso='$curso' WHERE id_Matricula='$idFiltro'";
        $query = mysqli_query($c, $sql);
        if ($query) {
            Desconectar($c);
            header("Location: matricula.php");
            die();
        }
    }


    ?>
</body>

</html>