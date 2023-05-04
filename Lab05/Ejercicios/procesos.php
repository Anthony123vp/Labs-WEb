<?php  

if(isset($_POST['Ejercicio1'])){
    $nHijos=$_POST['nhijos'];
    $ventaMes=$_POST['VentaMes'];
    $sBasico=$_POST['sueldoBasico'];

    $bonificacion=$nHijos*50;
    $comision=(7.5/100)*$ventaMes;

    $sBruto=$sBasico+($comision)+$bonificacion;
    $descuento=$sBruto*0.11;
    $sNeto=$sBruto-$descuento;

    echo "Comision: $comision$<br>";
    echo "Bonificacion: $bonificacion$<br>";
    echo "Sueldo Bruto: $sBruto$<br>";
    echo "Descuento: $descuento$<br>";
    echo "Sueldo Neto: $sNeto$<br>";

}

if(isset($_POST['Ejercicio2'])){
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $newPrice=$precio-($precio*0.05);
    $importeCompra=$newPrice*$cantidad;
    $descuento=$importeCompra*0.07;
    $importePagar=$importeCompra-$descuento;
    $Obsequio=$cantidad*2;

    echo "Nuevo Precio: $newPrice$<br>";
    echo "Importe de la Compra: $importeCompra$<br>";
    echo "Importe del Descuento: $descuento$<br>";
    echo "Importe a Pagar: $importePagar$<br>";
    echo "Obsequio: $Obsequio caramelos<br>";

}

if(isset($_POST['Ejercicio3'])){
    $precio = $_POST['Tarifa'];
    $cantidad = $_POST['nDias'];
    $descuento=$precio*0.15;
    $importeNeto=$precio-($precio*0.15);
    $Obsequio=$cantidad*3;


    echo "Importe Bruto: $precio$<br>"; 
    echo "Importe Descuento: $descuento$<br>";
    echo "Importe Neto: $importeNeto$<br>";
    echo "Obsequio: $Obsequio lapiceros<br>";

}

if(isset($_POST['Ejercicio4'])){
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $importeCompra=$precio*$cantidad;
    $primerdescuento=$importeCompra*0.05;
    $a=$importeCompra-$primerdescuento;
    $segundodescuento=$a*0.05;
    $descuentoTotal=$primerdescuento+$segundodescuento;
    $importeNeto=$a-$segundodescuento;

    echo "Importe Compra: $importeCompra$<br>"; 
    echo "Importe Descuento Total: $descuentoTotal$<br>";
    echo "Importe Pagar: $importeNeto$<br>";

}

?>