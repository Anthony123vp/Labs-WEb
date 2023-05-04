<?php
    if(isset($_POST['Suma'])){
        $numero1=$_POST['valor1'];
        $numero2=$_POST['valor2'];
        $suma=$numero1+$numero2;
        echo $suma;
    }
?>