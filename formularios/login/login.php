<?php
session_start();
require 'utilidades.php';
if (isset($_POST['email'])) {
    //Si estoy aquí he enviado el formulario
    //1.- recojo y limpio los datos
    $email = sanearCadenas($_POST['email']);
    $pass = sanearCadenas($_POST['password']);

    //2.- Hacemos las validaciones pertinentes
    $errores = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores = true;
        $_SESSION['errEmail'] = "***Error, debes introducir un email válido.";
    }
    if (!isLongitudValida($pass, 5, 15)) {
        $errores = true;
        $_SESSION['errPass'] = "***Error, la contraseña debe tener entre 5 y 15 caracteres";
    }
    //Si no hemos pasado las validaciones vuelvo a cargar el form para ver errores
    if ($errores) {
        header("Location:{$_SERVER['PHP_SELF']}");
        die();
    }
    // Si he llegado hasta aqui por lo menos los campos son correctos
    //Procedemos a validar los usuarios
    if(validarUsuario($email ,$pass)){
        $_SESSION['usuario'] = $email;
        $_SESSION['perfil'] = $usuarios[$email][1];
        header("Location:sitio.php");
        die();
    }
    //Si llego hasta aquí es por que login inválido es decir no es un usuario valido
    //o no ha puesto la pass correcta o las dos cosas
    $_SESSION['errLogin'] = "*** Error email o password incorrectos.";
    header("Location:{$_SERVER['PHP_SELF']}");
    die();
}
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

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tu email..." />
                            <?php
                            pintarErrores('errEmail');
                            ?>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            <?php
                            pintarErrores('errPass');
                            pintarErrores('errLogin');
                            ?>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800">
                            Sign in
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>