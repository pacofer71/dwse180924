<?php

use App\Articulo;
use App\Utils;

session_start();
require __DIR__ . "/../vendor/autoload.php";
if (isset($_POST['nombre'])) {
    //recojo y saneo los datos
    $nombre = Utils::sanearCadenas($_POST['nombre']);
    $descripcion = Utils::sanearCadenas($_POST['descripcion']);
    $precio = Utils::sanearCadenas($_POST['precio']);
    $stock = Utils::sanearCadenas($_POST['stock']);
    //hago las validaciones
    $errores = false;
    if (!Utils::isCadenaOk("nombre", $nombre, 3, 100)) {
        $errores = true;
    }
    if (!Utils::isCadenaOk("descripcion", $descripcion, 10, 250)) {
        $errores = true;
    }
    if (!Utils::isCampoNumberOk("precio", $precio, 1, 9999.99)) {
        $errores = true;
    }
    if (!Utils::isCampoNumberOk("stock", $stock, 0, 150)) {
        $errores = true;
    }
    if($errores){
        header("Location:{$_SERVER['PHP_SELF']}");
        exit();
    }
    //Si estamos aqui las validaciones han ido ok, guardamos el articulo
    (new Articulo)
    ->setNombre($nombre)
    ->setDescripcion($descripcion)
    ->setPrecio($precio)
    ->setStock($stock)
    ->crear();
    
    $_SESSION['mensaje']="Se ha creado un artículo nuevo.";
    header("Location:articulos.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-teal-200 p-4">
    <h3 class="py-2 text-center text-xl">Crear Artículo</h3>
    <div class="px-24 py-12 mx-auto w-1/2 border-4 border-black rounded-2xl shadow-2xl">
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="nombre" id="nombre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" />
                <label for="nombre" class="peer-focus:font-medium absolute text-sm text-gray-700 dark:text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre ...</label>
                <?php
                    Utils::pintarError('err_nombre');
                ?>
            </div>
            <div class="relative z-0 w-full mb-8 group">
                <textarea name="descripcion" id="descripcion" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "></textarea>
                <label for="descripcion" class="peer-focus:font-medium absolute text-sm text-gray-700 dark:text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripción ...</label>
                <?php
                    Utils::pintarError('err_descripcion');
                ?>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-8 group">
                    <input type="number" name="precio" id="precio" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " step="0.01" max="9999,99" min="1,00" />
                    <label for="precio" class="peer-focus:font-medium absolute text-sm text-gray-700 dark:text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Precio(€)...</label>
                    <?php
                    Utils::pintarError('err_precio');
                    ?>
                </div>
                <div class="relative z-0 w-full mb-8 group">
                    <input type="number" name="stock" id="stock" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " step="1" min='1' />
                    <label for="stock" class="peer-focus:font-medium absolute text-sm text-gray-700 dark:text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Stock ...</label>
                    <?php
                    Utils::pintarError('err_stock');
                    ?>
                </div>
            </div>
            <div class="flex flex-row-reverse mb-2">
                <button type="submit" class="font-bold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fas fa-save mr-2"></i>GUARDAR
                </button>
                <button type="reset" class="mr-2 font-bold text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fas fa-paintbrush mr-2"></i>RESET
                </button>
                <a href="articulos.php" class="mr-2 font-bold text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fas fa-home mr-2"></i>VOLVER
                </a>
            </div>
        </form>
    </div>
</body>

</html>