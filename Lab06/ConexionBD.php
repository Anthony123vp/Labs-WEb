<?php 
 
function Conectar(){
    $xc = mysqli_connect("localhost","root","","appsweb");
    return $xc;
    die();
}

function Desconectar($xc){
    mysqli_close($xc);
}
?>