<?php
//Escribe una función llamada intercambiar() que reciba dos variables 
//por referencia e intercambie sus valores
$a=45;
$b=123;
function intercambiar(&$dato1, &$dato2){
    $aux=$dato1;
    $dato1=$dato2;
    $dato2=$aux;
}
echo "<br>Antes de cambiar sus valores a=$a y b=$b";
intercambiar($a, $b);
echo "<br>Después de cambiar sus valores a=$a y b=$b";
