<?php

use App\Usuario;

require __DIR__."/../vendor/autoload.php";

$usuarios=Usuario::crearUsuarios(100);
var_dump($usuarios);