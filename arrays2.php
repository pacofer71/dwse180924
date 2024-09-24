<?php
$usuarios=[
    'usu1'=>'user45@email.com',
    'usu2'=>'user4235@email.com',
    'usu3'=>'user4225@email.com',
    'usu4'=>'user1145@email.com',
    'usu5'=>'user09145@email.com',
    'usu6'=>'user7845@email.com',
    //'userAdmin@email.es',
];
//echo $usuarios[0];
//die();

$usuarios['usu7']='userAdmin@email.es';
print_r($usuarios);
//algunas funciones utiles con arrays
echo "<br>La dimension de usuarios es: ".count($usuarios);
echo "<br>";
$claves=array_keys($usuarios);
print_r($claves);
$valores=array_values($usuarios);
echo "<br>";
print_r($valores);
//-----------------------------------
unset($usuarios[0]);
echo "<br>";
print_r($usuarios);
//-----------------------------Convertir un array en un string
$prueba=["clave1", "clave2", "manolo", "maria"];
$cadena=implode(":", $prueba);
echo "<br>$cadena";
$cadena="PASSWORD,PASSWORD2,PASSWORD3,JUAN";
$cadenaA=explode(",", $cadena);
echo "<br>";
print_r($cadenaA);