<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicio 01 - Operaciones PHP</title>
</head>
<body>
    <form action="" method="POST">
        Ingrese Valor 1: <br> <input type="text" name="valor1"><br>
        Ingrese Valor 2: <br> <input type="text" name="valor2"><br>
        Resultado: <br>
        <input type="submit" name="Suma" value="Suma">

    </form>

<?php
    if(isset($_POST['Suma'])){
        $numero1=$_POST['valor1'];
        $numero2=$_POST['valor2'];
        $suma=$numero1+$numero2;
        echo $suma;
    }
?>
</body>
</html>