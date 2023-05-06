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
           EDITAR CURSO
        </div>
        <div class="card-body">
            <form action="" method="post">

                <div class="row g-3 mb-3 palign-items-center">
                    <div class="col-auto">
                        <label for="nombre" class="col-form-label">NOMBRE</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" name="NomCurso" id="nombre" class="form-control" aria-labelledby="passwordHelpInline">
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
                <input class="btn btn-primary d-grid gap-2 col-6 mx-auto" name="Editar" type="submit" value="Editar">

                <input type="reset" class="btn d-grid gap-2 col-6 mx-auto btn-danger mt-3 " value="Limpiar">
            </form>
        </div>
    </div>

    <?php
    if(isset($_POST['Editar'])){
        $nombre = $_POST["NomCurso"];
        $id = filter_input(INPUT_POST, 'Profesores');
        $idFiltro=$_REQUEST['Id'];
        $sql = "UPDATE CURSO set nombre='$nombre',profesor='$id' WHERE id_Curso='$idFiltro'";
        $query = mysqli_query($conexion, $sql);
        if  ($query){
            header("Location: curso.php");
            die();
            Desconectar($conexion);
        }
    }
    
    
    ?>
</body>

</html>