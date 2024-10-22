<?php

use src\Cliente;
use src\PlanFactory;

spl_autoload_register(function(string $class){
    $ruta=str_replace("\\", "/", $class); // src/Cliente
    require "../$ruta.php";
});

$manolo=new Cliente(8000);
$planManolo=(new PlanFactory)->getPlan($manolo);
echo "<br>".$planManolo::class;
$pvp=$manolo->getPrecioFinal($planManolo->getDescuento());
echo "<br>Manolo se ha gastado 500€ pero pagará $pvp €";