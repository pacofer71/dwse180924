<?php

// $cad="man5675olo";
// $cadenaConvertida = (int)$cad;
// echo $cadenaConvertida;
// echo "<br>";
// die("FINAL");

if(!isset($_GET['numero'])){
    die("Error introduce numero en la url");
}
$numero=(int)$_GET['numero'];
if($numero==0){
    die("Error se esperaba un entero positivo numero en la url");
}
$bandera=true;
for($i=2; $i<$numero; $i++){
        if($numero%$i==0){
            $bandera=false;
            break;
        }
}
echo ($bandera) ? "$numero ES PRIMO" : "$numero NO ES PRIMO";