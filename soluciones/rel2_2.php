<?php
/*
 Desarrolla un programa que reciba un número de mes (1, 12)
  y un número de día de la semana (1, 7)
   y
devuelva el nombre del mes, el nombre del día de la semana 
y el número de días de dicho mes
 (sin tener en cuenta los
bisiestos). Haremos control de errores, es decir, si el número de mes no está entre 1 y 12 o el número del día de la
semana entre 1 y 7 mostraremos un mensaje de error.

*/
$meses=[
    1=>["Enero", 31],
    2=>["Febrero", 28],
    3=>["Marzo", 31],
    4=>["Abril", 30],
    5=>["Mayo", 31],
    6=>["Junio", 30],
    7=>["Julio", 31],
    8=>["Agosto", 31],
    9=>["Septiembre", 30],
    10=>["Octubre",31],
    11=>["Noviembre", 30],
    12=>["Diciembre", 31],
];
$semanas=[
    1=>"Lunes", 
    2=>"Martes", 
    3=>"Miercoles", 
    4=>"Jueves", 
    5=>"Viernes", 
    6=>"Sabado",
    7=>"Domingo"
];
function escribirInfo(int $dia, int $mes){
    global $meses;
    global $semanas;
    if(!in_array($dia, array_keys($semanas))){
        echo "<br>Error el dia de la semana NO existe!!!!";
        return;
    }
    if(!in_array($mes, array_keys($meses))){
        echo "<br>Error NO existe el MES!!!!";
        return;
    }
    echo "El dia es: {$semanas[$dia]}, el mes es :".$meses[$mes][0]. " y el
    mes tiene: ".$meses[$mes][1]." dias";
}

escribirInfo(7, 20);



