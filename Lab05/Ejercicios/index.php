<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Ejercicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">:
</head>

<body>
    <!--Primer Ejercicio-->
    <div class="card">
        <div class="card-header text-bg-dark">
            Empresa-Bonificacion
        </div>
        <div class="card-body text-bg-secondary">
            <form action="resultado.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Sueldo Basico</span>
                    <input type="number"  name="sueldoBasico" value="600" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero de Hijos</span>
                    <input type="number"  name="nhijos" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Venta del Mes</span>
                    <input type="text"  name="VentaMes" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <button type="submit" name="Ejercicio1" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-danger">Limpiar</button>
            </form>
        </div>
    </div>


    <!--Segundo Ejercicio-->
    <div class="card">
        <div class="card-header text-bg-dark">
            Fabrica de Gaseosas
        </div>
        <div class="card-body text-bg-secondary">
            <form action="resultado.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Precio Actual</span>
                    <input type="text"  name="precio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cantidad de Unidades</span>
                    <input type="text"  name="cantidad" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <button type="submit" name="Ejercicio2" class="btn btn-primary">Eliminar</button>
                <button type="reset" class="btn btn-danger">Limpiar</button>
            </form>
            
        </div>
    </div>

    <!--Tercer Ejercicio-->
    <div class="card">
        <div class="card-header text-bg-dark">
            Alquiler de Automoviles
        </div>
        <div class="card-body text-bg-secondary">
            <form action="resultado.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tarifa</span>
                    <input type="text"  name="Tarifa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero de Dias</span>
                    <input type="number"  name="nDias" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <button type="submit" name="Ejercicio3" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-danger">Limpiar</button>
            </form>
            
        </div>
    </div>

    <!--Cuarto Ejercicio-->
    <div class="card">
        <div class="card-header text-bg-dark">
            Venta de Conos para CDs
        </div>
        <div class="card-body text-bg-secondary">
            <form action="resultado.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Precio del Cono</span>
                    <input type="text"  name="precio" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cantidad de Conos</span>
                    <input type="number"  name="cantidad" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <button type="submit" name="Ejercicio4" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-danger">Limpiar</button>

            </form>
            
        </div>
    </div>















</body>

</html>