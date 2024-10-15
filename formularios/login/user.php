<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location:login.php");
    die();
}
$email = $_SESSION['usuario'];
$perfil = ($_SESSION['perfil']) ? "Administrador" : "Usuario";
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

<body class="bg-blue-200 p-12">
    <h1 class="text-center text-2xl font-bold">Portal del Usuario</h1>
    <p class="font-bold">Usuario:<?php echo $email ?></p>
    <p class="font-bold">Perfil:<?php echo $perfil ?></p>
    <div class="mt-12 flex p-6 border-4 shadow-xl rounded-xl justify-around">
        <a href="sitio.php"
            class="px-2 py-1 rounded text-white bg-purple-500 hover:bg-purple-700 font-bold">
            <i class="fa-solid fa-home mr-2"></i>Home
        </a>
        <?php
        if ($_SESSION['perfil']) {
            echo <<< TXT
                <a href="admin.php"
            class="px-2 py-1 rounded text-white bg-green-500 hover:bg-green-700 font-bold">
            <i class="fa-solid fa-user-gear mr-2"></i>Portal Administrador
            </a>
            TXT;
        }
        ?>
        <a href="cerrar.php"
            class="px-2 py-1 rounded text-white bg-blue-500 hover:bg-blue-700 font-bold">
            Cerrar Sesión<i class="ml-2 fa-solid fa-right-from-bracket"></i>
        </a>
    </div>
</body>

</html>