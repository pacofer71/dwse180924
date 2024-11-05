<?php

use App\Articulo;

session_start();



if(!isset($_POST['id'])){
    header("Location:articulos.php");
    die();
}
$id=(int) $_POST['id'];

if($id<=0){
    header("Location:articulos.php");
    die();
}

require __DIR__."/../vendor/autoload.php";
Articulo::delete($id);
$_SESSION['mensaje']="Artículo eliminado de la base de datos";
header("Location:articulos.php");


