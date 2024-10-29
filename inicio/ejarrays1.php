<?php
//rellenamos con numeros aleatorios entre 1 y 30
//enteros random_int() un array de 20 elementos
//creamos otro array con sus cuadrados
//y otro con sus cubos
//mostramos en una tabla de tres columnas los tres arrays
//primera columna el array original
//segunda los cuadrados,
//tercera lops cubos
$original = [];
$cubos = [];
$cuadrados = [];
for ($i = 0; $i < 20; $i++) {
    $numero = random_int(1, 30);
    $original[] = $numero; //array_push($original, $numero);
    $cuadrados[] = $numero * $numero;
    $cubos[] = $numero * $numero * $numero;
}
echo "<table align='center' border='2' cellpadding='8'>";
echo "<tr style='background-color: silver'>";
echo "<td>Original</td><td>Cuadrados</td><td>Cubos</td>";
echo "</tr>";
for ($i = 0; $i < count($original); $i++) {
    echo "<tr>";
    echo "<td>{$original[$i]}</td>";
    echo "<td>{$cuadrados[$i]}</td>";
    echo "<td>{$cubos[$i]}</td>";
    echo "</tr>";
}
echo "</table>";
// mismo ejeercicio pero NO se pueden repetir los numeros
$original1 = [];
$cubos1 = [];
$cuadrados1 = [];
$cont=0;
while($cont<=20) {
    $numero = random_int(1, 30);
    if(!in_array($numero, $original1)){
        $original1[] = $numero; //array_push($original, $numero);
        $cuadrados1[] = $numero * $numero;
        $cubos1[] = $numero * $numero * $numero;
        $cont++;
    }
   
}
echo "<hr>";

echo "<table align='center' border='2' cellpadding='8'>";
echo "<tr style='background-color: silver'>";
echo "<td>Original</td><td>Cuadrados</td><td>Cubos</td>";
echo "</tr>";
for ($i = 0; $i < count($original); $i++) {
    echo "<tr>";
    echo "<td>{$original1[$i]}</td>";
    echo "<td>{$cuadrados1[$i]}</td>";
    echo "<td>{$cubos1[$i]}</td>";
    echo "</tr>";
}
echo "</table>";

