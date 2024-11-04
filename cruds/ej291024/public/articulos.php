<?php

use App\Articulo;

session_start();
require __DIR__ . "/../vendor/autoload.php";
$todos = Articulo::read();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-teal-200 p-4">
    <h3 class="py-2 text-center text-xl">Artículos Disponibles</h3>
    <div class="px-24 py-2 mx-auto">
        <div class="flex flex-row-reverse mb-2">
            <a href="crear.php" class="px-3 py-2 rounded-xl font-semibold text-white bg-green-600 hover:bg-green-800">
                <i class="fas fa-add mr-2"></i>NUEVO
            </a>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NOMBRE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DESCRIPCIÓN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        PRECIO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        STOCK
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACCIONES
                    </th>


                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($todos as $item) {
                    echo <<<TXT
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                    {$item->id}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {$item->nombre}
                    </th>
                    <td class="px-6 py-4">
                {$item->descripcion}
                    </td>
                    <td class="px-6 py-4">
                {$item->precio}€
                    </td>
                    <td class="px-6 py-4">
                {$item->stock}
                    </td>
                    <td class="px-6 py-4 nowrap">
                        <form method="POST" action="borrar.php">
                            <input type="hidden" name="id" value="304" />
                            <a href="update.php?id=304"><i class="fas fa-edit text-yellow-700 hover:text-xl"></i></a>
                            <button type="submit" class="ml-2"><i class="fas fa-trash text-red-700 hover:text-xl"></i></button>
                        </form>
                    </td>
                </tr>
                TXT;
                }
                ?>

            </tbody>
        </table>
    </div>

    <?php
    if (isset($_SESSION['mensaje'])) {
        echo <<<TXT
        <script>
            Swal.fire({
            icon: "success",
            title: "{$_SESSION['mensaje']}",
            showConfirmButton: false,
            timer: 1500
            });
        </script>
        TXT;
        unset($_SESSION['mensaje']);
    }
    ?>
</body>

</html>