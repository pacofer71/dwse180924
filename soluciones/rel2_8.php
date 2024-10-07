<?php
/*
usort() es una función php que ordena un array según sus valores usando una función de comparación
definida por el usuario, es decir una función anónima. Crea una función llamada ordenarPorLongitud() que reciba un
array de cadenas de texto y lo ordene de acuerdo a la longitud de las cadenas, de mayor a menor, utilizando una función
anónima en usort(). 
*/
function ordenarPorLongitud(array &$datos){
    usort($datos, function($a, $b){
        return (strlen($a)-strlen($b)); // <0,   =0, >0

    });
}


$lenguajes=["PHP", "C", "C++", "Java Script", "Java", "Kotlin"];
echo "el Array antes de ordenarle";
var_dump($lenguajes);

ordenarPorLongitud($lenguajes);

echo "<br>el Array DESPÚES de ordenarle";
var_dump($lenguajes);
