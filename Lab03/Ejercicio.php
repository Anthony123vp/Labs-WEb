<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="question">
    <h3 style="text-align: center;">Pregunta 1</h3>

        <form action="mostrardatos.php" method="POST">
            <label for="">Ingrese su Usuario: </label>
            <input type="text" name="usuario" placeholder="Usuario...">

            <br>
            <br>
            <label for="">Ingrese su Gmail: </label>
            <input type="email" name="email" placeholder="E-Mail...">
            <br>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <div class="question">
    <h3 style="text-align: center;">Pregunta 2</h3>

        <form action="" method="POST">
            <label for="">Numero 1: </label>
            <input type="number" name="numero1" placeholder="Ingrese Numero.." required>

            <br>
            <br>
            <label for="">Numero 2: </label>
            <input type="number" name="numero2" placeholder="Ingrese Numero.." required>
            <br>
            <br>
            <label for="">Numero 3: </label>
            <input type="number" name="numero3" placeholder="Ingrese Numero.." required>
            <br>
            <br>
            <label for="">Numero 4: </label>
            <input type="number" name="numero4" placeholder="Ingrese Numero.." required>
            <br>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        
            
        </form>
        <?php  
                if(isset($_POST['enviar'])){
                    $n1=$_POST['numero1'];
                    $n2=$_POST['numero2'];
                    $n3=$_POST['numero3'];
                    $n4=$_POST['numero4'];

                    $suma = $n1+$n2;
                    $producto = $n3*$n4;
                        
                    echo "<br>La suma de los 2 primeros numeros:$suma <br>";
                    echo "El producto de los 2 primeros numeros: $producto";
                } 
        ?>
    </div>

    <div class="question">
        <h3 style="text-align: center;">Pregunta 3</h3>
        <form action="Ejercicio.php" method="POST">
            <label for="">Numero 1: </label>
            <input type="number" name="num1"placeholder="Ingrese Numero.." required>

            <br>
            <br>
            <label for="">Numero 2: </label>
            <input type="number" name="num2" placeholder="Ingrese Numero.." required>
            <br>
            <br>
            <input type="submit" name="Enviar2" value="Enviar">
            <?php
                    if(isset($_POST["Enviar2"])){
                    $numero1=$_POST['num1'];
                    $numero2=$_POST['num2'];
            

                        if($numero1>$numero2){
                            $sumat=$numero1+$numero2;
                            $diferencia=$numero1-$numero2;
                            echo "<br>Suma:$sumat <br>";
                            echo "Diferencia:$diferencia";
                        }else{
                            $producto=$numero1*$numero2;
                            $division=$numero1/$numero2;
                            echo "<br>Producto:$producto <br>";
                            echo "Division:$division";
                        }
                    }
                
            ?>
        </form>
    </div>

    <div class="question">
        <h3 style="text-align: center;">Pregunta 4</h3>
        <form action="" method="POST">
            <label for="">Nota 1: </label>
            <input type="number" name="nota1" placeholder="Ingrese Numero..">

            <br>
            <br>
            <label for="">Nota 2: </label>
            <input type="number" name="nota2" placeholder="Ingrese Numero..">
            <br>
            <br>
            <label for="">Nota 3: </label>
            <input type="number" name="nota3" placeholder="Ingrese Numero..">
            <br>
            <br>
            <input type="submit" name="Enviar3" value="Enviar">

            <?php
                    if(isset($_POST["Enviar3"])){
                        $nota1=$_POST['nota1'];
                        $nota2=$_POST['nota2'];
                        $nota3=$_POST['nota3'];

                        $promedio=($nota1+$nota2+$nota3)/3;
                        if($promedio>=13){
                            echo "<h3>APROBADO</h3>";
                        }else{
                            echo "<h3>DESAPROBADO</h3>";
                        }
                    }
                
            ?>
        </form>
    </div>

    <div class="question">
        <h3 style="text-align: center;">Pregunta 5</h3>
        <form action="" method="POST">
        <label for="">Numero 1: </label>
            <input type="number" name="a" placeholder="Ingrese Numero..">

            <br>
            <br>
            <label for="">Numero 2: </label>
            <input type="number" name="b" placeholder="Ingrese Numero..">
            <br>
            <br>
            <label for="">Numero 3: </label>
            <input type="number" name="c" placeholder="Ingrese Numero..">
            <br>
            <br>
            <input type="submit" name="Enviar4" value="Enviar">
            <?php
                    if(isset($_POST["Enviar4"])){
                        $a=$_POST['a'];
                        $b=$_POST['b'];
                        $c=$_POST['c'];
                        $numeroMayor=$a;
                        if($b>$a){
                            $numeroMayor=$b;
                        }
                        if($c>$a){
                            $numeroMayor=$c;
                        }
                        echo "<br><br>Numero Mayor:$numeroMayor";
                    }
                
            ?>
        </form>
    </div>
    
</body>
</html>