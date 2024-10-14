<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("Location:login.php");
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
<body class="bg-silver-200 p-12">
    <h1 class="text-center text-2xl font-bold">Sitio de la Empresa</h1>
    
</body>
<div class="mt-12 mx-auto">
    <a href="cerrar.php" 
        class="px-2 py-1 rounded text-white bg-blue-500 hover:bg-blue-700 font-bold">
        Cerrar Sesión</a>
</div>
</html>