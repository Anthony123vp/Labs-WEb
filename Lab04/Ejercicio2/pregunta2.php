<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <div class="card-header text-center bg-secondary bg-gradient ">
            BIENVENIDO
        </div>
        <div class="card-body">
            <?php 
                $nombre=$_POST["txtName"];
                $direccion=$_POST["txtDirection"];
                $edad=$_POST["txtEdad"];
                $email=$_POST["txtEmail"];
                echo "<p>¡Bienvenido $nombre!</p>";
                echo "<p>Tu direccion es $direccion</p>";
                echo "<p>Tienes $edad años y tu correo es $email</p>";
            ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>