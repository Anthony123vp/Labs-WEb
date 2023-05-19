<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <script src="./Script/Usuario.js"></script>
</head>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card{
        width: 600px;
    }
</style>
<body>
    <div class="card">
        <div class="card-header text-center" >
            LOGIN
        </div>
        <div class="card-body d-flex justify-content-center">
            <form action="" method="POST">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                      <label for="inputPassword6" class="col-form-label">Usuario:</label>
                    </div>
                    <div class="col-auto">
                      <input type="text" name="correo" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                </div>
                <br>

                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                      <label for="inputPassword6" class="col-form-label">Password:</label>
                    </div>
                    <div class="col-auto">
                      <input type="password" name="contraseña" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                </div>
                <br>
                <input type="Submit" value="Ingresar" name="Enviar" class="btn btn-primary">

            </form>
        </div>
    </div>

    <?php 
     include "./Conexion/conexion.php";
     
     if (isset($_POST['Enviar'])) {
        $conexion=conectar();
        
        // Obtenemos los valores del formulario
        $usuario = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        
        
        //Realizamos la consulta
        $sql = "SELECT COUNT(*) total FROM USUARIO WHERE email='$usuario' AND password='$contraseña'";
        $query=mysqli_query($conexion,$sql);
        $cantidad = mysqli_fetch_assoc($query);


        if($cantidad['total']==0){
            header("Location: producto.html");
        }else{
            ?> 
            <h1>PERDON INGRESE OTRA VEZ</h1>
            <?php
        }
        desconectar($conexion);
     } 
     
       
     
     ?>


</body>

</html>