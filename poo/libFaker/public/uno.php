<?php

use src\utils\Faker;
use src\Usuario;
use const src\utils\DOS_APELLIDOS;
use const src\utils\UN_APELLIDO;

spl_autoload_register(function(string $className){
    $ruta=str_replace("\\", "/", $className);
    //require "../$ruta.php";
    require __DIR__."/../$ruta.php";
});
$cantidad=1000;
$usuarios=[];

for($i=0; $i<$cantidad; $i++){
    $nombre=Faker::getNombre();
    $apellidos=Faker::getApellidos();
    $ciudad=Faker::getCiudad();
    $perfil=Faker::getPerfil();
    $usuario=(new Usuario)
    ->setNombre($nombre)
    ->setApellidos($apellidos)
    ->setCiudad($ciudad)
    ->setPerfil($perfil);
    $usuarios[]=$usuario;
}
var_dump($usuarios);