<?php

use src\Backend\Admin\Conexion;
//use src\Backend\Cliente;
use src\Frontend\Cliente as FrontendCliente;
use src\Utils;

use const src\MAY_ON;

spl_autoload_register(function (string $className) {
    //die($className);
    $ruta = str_replace("\\", "/", $className);
    require "./../$ruta.php";
});

Utils::saludo("Andres");
$cliente1 = new src\Backend\Cliente("Pedro");
$cliente2=new FrontendCliente("Pedro");
Conexion::saludoAdmin();
echo MAY_ON;
echo "<hr>";
echo FrontendCliente::class;
echo "<hr>";
echo get_class($cliente1);