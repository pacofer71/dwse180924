<?php
session_start();
// include, include_once, require, require_once
//require '../utilidades.php';
require __DIR__ . "/../utilidades.php";
if (isset($_POST['btnGuardar'])) {
    //Procesamos el formulario
    //1.- recogemos los datos y saneamos y limpiamos
    $email = limpiarCadenas($_POST['email']);
    $password = limpiarCadenas($_POST['password']);
    $provincia = limpiarCadenas($_POST['provincia']);
    $aficionesElegidas = (isset($_POST['aficiones']))
        ? $_POST['aficiones']
        : -1;
    //2.- Validaciones (password al menos 5 y no mas 15 caracteres, email válido alguna aficion y alguna prov)
    $errores = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores = true;
        $_SESSION['errEmail'] = "*** El email NO es válido";
    }
    if (strlen($password) < 5 || strlen($password) > 15) {
        $errores = true;
        $_SESSION['errPass'] = "*** El password debe tener entre 5 y 15 caracteres";
    }
    if (!in_array($provincia, $provincias)) {
        $errores = true;
        $_SESSION['errProv'] = "*** Debes elegir una provincia";
    }
    if ($aficionesElegidas == -1) {
        $errores = true;
        $_SESSION['errAfi'] = "*** Debes elegir alguna aficion";
    } else {
        //aficiones=[todas]
        foreach ($aficionesElegidas as $item) {
            if (!in_array($item, $aficiones)) {
                $errores = true;
                $_SESSION['errAfi'] = "*** Aficion erronea, intento de ataque";
                break;
            }
        }
    }

    if ($errores) {
        header("Location:dos.php");
    } else {
        echo "<br>Datos correctos<br>";
        echo "Email: $email<br>";
        echo "Password: $password<br>";
        echo "Provincia: $provincia<br>";
        foreach($aficionesElegidas as $item){
            echo "$item<br>";
        }

    }
} else {

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CDN tailwind css -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- CDN FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Document</title>
    </head>

    <body class="bg-teal-200">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="w-96 mx-auto">
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="text" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" />
                <?php
                    pintarErrores("errEmail");
                ?>
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input type="text" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <?php
                    pintarErrores("errPass");
                ?>
            </div>
            <div class="mb-5">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleciona una provincia</label>
                <select id="countries" name="provincia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>--- Elige una Provincia ---</option>
                    <?php
                    foreach ($provincias as $item) {
                        echo "<option>$item</option>\n";
                    }
                    ?>
                </select>
                <?php
                    pintarErrores("errProv");
                ?>
            </div>

            <div class="flex mb-5">
                <?php
                foreach ($aficiones as $item) {
                    echo <<<TXT
                <div class="flex items-center me-4">
                    <input id="$item" name="aficiones[]" type="checkbox" value="$item" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="$item" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">$item</label>
                </div>
            TXT;
                }
                echo "<br>";
                pintarErrores('errAfi');
                ?>

            </div>
            <button name="btnGuardar" class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                <i class="fa-solid fa-floppy-disk mr-2"></i>GUARDAR
            </button>
        </form>

    </body>

    </html>
<?php } ?>