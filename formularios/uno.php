<?php
    $provincias=['Almeria', 'sEVILLA'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- method=GET y method=POST -->
    <form method="POST" action="action1.php">
        <input type="text" placeholder="Tu nombre ..." name="name" required /><br><br>
        <input type="email" placeholder="Tu email ..." name="email" /><br><br>
        <input type="password" placeholder="Tu contraseña ..." name="pass" />
        <br><br>
        <select name="provincia">
            <option>Almeria</option>
            <option>Granada</option>
            <option>Sevilla</option>
        </select>
        <br><br>
        Elige un color:<br><br>
        <input type='radio' name="color" value="Blanco" checked>Blanco<br>
        <input type='radio' name="color" value="Negro">Negro<br>
        <input type='radio' name="color" value="Azul">Azul<br><br>
        Elige una afición:<br>
        <input type='checkbox' name="aficiones[]" value="Bici">Ciclismo<br>
        <input type='checkbox' name="aficiones[]" value="Cine">Cine<br>
        <input type='checkbox' name="aficiones[]" value="PHP">PHP<br>
        <input type='checkbox' name="aficiones[]" value="Lectura">Lectura<br>
        <input type='checkbox' name="aficiones[]" value="Otras">Otras<br><br>
        


        <input type='submit' />


    </form>
</body>
</html>