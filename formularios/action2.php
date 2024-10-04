<?php
//recogemos los datos del formulario
$email=htmlspecialchars(trim($_POST['email'])); //quitamos espacios en blanco al inicio y al final
$pass=trim($_POST['password']);
$provincia=$_POST['provincia'];

$aficiones=(isset($_POST['aficiones'])) 
    ? $_POST['aficiones']
    : -1 ;
//vamos a obligar a que el email sea un email válido
//el password tenga al menos 5 caracteres
//las provincias esten en el array de provincias
//las aficiones esten en el array de aficiones
//y que al menos hayamos marcado una
echo "$email<br>";
echo "$pass<br>";