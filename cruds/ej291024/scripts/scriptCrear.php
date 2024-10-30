<?php
require __DIR__."/../vendor/autoload.php";
use App\Articulo;

$n=0;
do{
    $n=(int) readline("\nDame el número de artículos(1-100)?");
    if(!is_int($n) || $n<1 || $n>100){
        echo "\n Error,  Se esperaba un numero entre 1 y 100 !!!.";
    }
}while(!is_int($n) || $n<1 || $n>100);
Articulo::crearArticulosFaker($n);
echo "\nSe han creado $n artículos.".PHP_EOL;