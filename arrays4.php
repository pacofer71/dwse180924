<?php
//Ordenacion de arrays
//sort, rsort, asort, arsort, ksort, krsort
//1.- SORT se suele usar para arrays NO asociativos
$nombres=['manolo', 'juan', 'ana', 'zacarias', 'pedro'];
echo "<center>Método sort</center>";
echo "array nombres antes de su ordenación con <b>sort</b>:";
var_dump($nombres);
sort($nombres);
echo "array nombres después de su ordenación con <b>sort</b>:";
var_dump($nombres);
//2.- RSORT
$nombres=['manolo', 'juan', 'ana', 'zacarias', 'pedro'];
echo "<center>Método rsort</center>";
echo "array nombres antes de su ordenación con <b>rsort</b>:";
var_dump($nombres);
rsort($nombres);
echo "array nombres después de su ordenación con <b>rsort</b>:";
var_dump($nombres);
//asort Se utiliza para arrays asociativos
$usuarios=[
    'manolo'=>'manolo@email.es',
    'user56'=>'ana@email.es',
    'zasca23'=>'maria@email.es',
    'ana34'=>'anamaria@correo.es',
    'al34'=>'zacarias@email.es'
];
echo "<center>Método asort</center>";
echo "array usuarios antes de su ordenación con <b>asort</b>:";
var_dump($usuarios);
asort($usuarios);
echo "array usuarios después de su ordenación con <b>asort</b>:";
var_dump($usuarios);
//------------------------
//arsort Se utiliza para arrays asociativos
$usuarios=[
    'manolo'=>'manolo@email.es',
    'user56'=>'ana@email.es',
    'zasca23'=>'maria@email.es',
    'ana34'=>'anamaria@correo.es',
    'al34'=>'zacarias@email.es'
];
echo "<center>Método arsort</center>";
echo "array usuarios antes de su ordenación con <b>arsort</b>:";
var_dump($usuarios);
arsort($usuarios);
echo "array usuarios después de su ordenación con <b>arsort</b>:";
var_dump($usuarios);
//------------------------------------------------
//ksort Se utiliza para arrays asociativos, ordena las claves
$usuarios=[
    'manolo'=>'manolo@email.es',
    'user56'=>'ana@email.es',
    'zasca23'=>'maria@email.es',
    'ana34'=>'anamaria@correo.es',
    'al34'=>'zacarias@email.es'
];
echo "<center>Método ksort</center>";
echo "array usuarios antes de su ordenación con <b>ksort</b>:";
var_dump($usuarios);
ksort($usuarios);
echo "array usuarios después de su ordenación con <b>ksort</b>:";
var_dump($usuarios);

//ksort Se utiliza para arrays asociativos, ordena las claves
$usuarios=[
    'manolo'=>'manolo@email.es',
    'user56'=>'ana@email.es',
    'zasca23'=>'maria@email.es',
    'ana34'=>'anamaria@correo.es',
    'al34'=>'zacarias@email.es'
];
echo "<center>Método krsort</center>";
echo "array usuarios antes de su ordenación con <b>krsort</b>:";
var_dump($usuarios);
krsort($usuarios);
echo "array usuarios después de su ordenación con <b>krsort</b>:";
var_dump($usuarios);
//---------------------------------------------------natsort()
$nombres=['Manolo', 'juan', 'Ana', 'zacarias', 'pedro'];
echo "<center>Método natsort</center>";
echo "array nombres antes de su ordenación con <b>natsort</b>:";
var_dump($nombres);
natsort($nombres);
echo "array nombres después de su ordenación con <b>sort</b>:";
var_dump($nombres);

// Algunas funciones de arrays interesante
// implode, explode, count, compact
//array_push() y array_pop() //añade y quita al final de un array
$array=['uno', 'dos', 'tres'];
var_dump($array);
array_push($array, "manolo");
var_dump($array);
echo "<br>".array_pop($array)."<br>"; //lo quita y lo devuelve
var_dump($array);
//array_unshift() añade un elemento al principio de un array
//array_shift() quita un elemento y lo devuelve
$array=['uno', 'dos', 'tres'];
array_unshift($array, "primer elemento");
var_dump($array);
array_shift($array);
var_dump($array);
//desordenar un array suffle()
$numeros=[1,2,3,4,5,6];
shuffle($numeros);
var_dump($numeros);
echo "<hr><hr>La tirada del dado ha sido: ".$numeros[0];
//crear un array range()
$datos=range(2,10); //[2, 3, 4,....,10];
var_dump($datos);
$letrasMinusculas=range('b', 'p');
$lerasMayusculas=range('A', 'D');
var_dump($letrasMinusculas);
var_dump($lerasMayusculas);
//-------------------- in_array()
$colores=['Azul', 'Amarillo', 'Verde'];
$miColor='Azul';
if(in_array($miColor, $colores)){
    echo "<br> $miColor está en el array colores";
}else{
    echo "<br> $miColor NO está en el array colores";
}
echo "<br>";
echo (in_array($miColor, $colores)) 
    ? "<br> $miColor está en el array colores" 
    : "<br> $miColor NO está en el array colores";



