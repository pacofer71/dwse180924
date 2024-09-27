<?php
//Ejercicio 1. En una variable $filas guardaremos un número entre 10 y 15
//ambos incluidos, en otra $columnas guardaremos un valor entre 5 y 10
//pintaremos una tabla html de $filas y $columnas y dentro
//de cada celda pondremos un número consecutivo, empezando por 1 y
//acabando en $filas x $columnas
$filas = 10;
$columnas = 5;
$cont = 1;
echo "<center><h3>Tabla de $filas X $columnas</h3></center>";
echo "<table align='center' border='2' cellpadding='5'>";
for ($f = 0; $f < $filas; $f++) {
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        echo "<td>" . $cont++ . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
/*
Ejercicio 2. haremos una tabla en las mismas condiciones
que la anterior pero ahora las celdas 
con números pares las pondremos de color 'aqua'
y con numeros impares de color 'silver'
hay que poner en el <td style='background-color: el que se'>
*/
$filas = random_int(10, 15);
$columnas = random_int(5, 10);
$cont = 0;
echo "<center><h3>Tabla con Colores de $filas X $columnas</h3></center>";
echo "<table align='center' border='2' cellpadding='5'>";
for ($f = 0; $f < $filas; $f++) {
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        $cont++;
        $color = (($cont) % 2 == 0)  ? 'aqua' : 'silver';
        echo "<td style='background-color:$color'>$cont</td>";
    }
    echo "</tr>";
}
echo "</table>";
/*
Ejercicio 3. haremos una tabla en las mismas condiciones
que la anterior pero ahora las celdas 
con números primos la pintaremos de rojo
el resto de celdas blancas
hay que poner en el <td style='background-color: red'>
*/
$filas = random_int(10, 15);
$columnas = random_int(5, 10);
$cont = 1;
echo "<center><h3>Tabla con Colores en Primos de $filas X $columnas</h3></center>";
echo "<table align='center' border='2' cellpadding='5'>";
for ($f = 0; $f < $filas; $f++) {
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        $flag=true;
        for($i=2; $i<$cont; $i++){
            if($cont%$i==0){
                $flag=false;
                break;
            }
        }
        $color=($flag && $cont!=1) ? 'red' : 'white';
        echo "<td style='background-color:$color'>$cont</td>";
        $cont++;
    }
    echo "</tr>";
}
echo "</table>";
/*
Ejercicio 4.- Hacer un tablero de 
ajedrez en una tabla html (tabla de 8x8)
alternando negras y blancas
*/
$filas = 8;
$columnas = 8;
echo "<center><h3>Tablero de Ajedrez</h3></center>";
echo "<table align='center' border='2' cellpadding='5'>";
for ($f = 0; $f < $filas; $f++) {
    echo "<tr>";
    for ($c = 0; $c < $columnas; $c++) {
        $color = (($f+$c)%2==0) ? 'white' : 'black'; 
        echo "<td style='background-color: $color'>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
}
echo "</table>";
/*
Ejercicio 5.
Buscaremos los primeros 1000 numeros primos (el 1 NO lo consideramos primo) y los
meteremos en un array de 50x20 y los
mostraremos en un tabla html de 50 x 20
*/
// PENSAR EN CASA






