<?php

use Src\Providers\PeliculasProvider;

    require __DIR__."/../vendor/autoload.php";
    $peliculas=PeliculasProvider::getPeliculas();
    //var_dump($peliculas);
    //die();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Peliculas</title>
</head>

<body class="p-8 bg-purple-800">
    <div class="min-h-screen bg-purple-900 text-white">
        <!-- Grid centrado y con un ancho máximo de 3/4 de la página -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 p-6 max-w-3/4 mx-auto rounded-xl border-2 border-white">
        <?php 
        foreach($peliculas as $item){
            $porcentaje=($item->getPuntuacion()*10);
        echo <<<TXT
            <div class="bg-gray-800 rounded-xl shadow-xl overflow-hidden">
                <!-- Imagen de la película con proporción 4:3 -->
                <img src="{$item->getPoster()}" alt="{$item->getTitulo()}" class="w-full h-82 object-cover object-center">
                <div class="p-4">
                    <h3 class="text-lg font-bold">{$item->getTitulo()}</h3>
                    <p class="text-gray-400 mt-2 italic">{$item->getSinopsis()}</p>
                    <div class="mt-4">
                        <p class="text-sm font-semibold">Puntuación: {$item->getPuntuacion()}/10</p>
                        <div class="w-full bg-gray-600 rounded-full h-2.5 mt-2">
                            <div class="bg-green-500 h-2.5 rounded-full" style="width: $porcentaje%"></div>
                        </div>
                    </div>
                </div>
            </div>
        TXT;
        }
        ?>
        </div>
    </div>
</body>

</html>