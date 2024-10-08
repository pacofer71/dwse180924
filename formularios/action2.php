<?php
include 'utilidades.php'; 
//recogemos los datos del formulario
$email=htmlspecialchars(trim($_POST['email'])); //quitamos espacios en blanco al inicio y al final
$pass=htmlspecialchars(trim($_POST['password']));
$provincia=$_POST['provincia'];

$aficiones_recogidas=(isset($_POST['aficiones'])) 
    ? $_POST['aficiones']
    : -1 ;
//vamos a obligar a que el email sea un email válido
//el password tenga al menos 5 caracteres
//las provincias esten en el array de provincias
//las aficiones esten en el array de aficiones
//y que al menos hayamos marcado una
$errores=[];
//validamos pass
if(strlen($pass)<5){
    $errores[]="El campo Password debe tener al menos 5 carácteres";
}
//validamos email
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errores[]="El campo email debe guardar un email válido";
}
//validamos aficiones
if($aficiones_recogidas==-1){
    $errores[]="Elija una afición";
}else{
    foreach($aficiones_recogidas as $item){
        if(!in_array($item, $aficiones)){
            $errores[]="Aficion NO Válida";
            break;
        }
    }
}
// Validamos provincias
if(!in_array($provincia, $provincias)){
    $errores[]='Elija una provincia';
}
if(count($errores)){
    echo "<center><h3>** ERRORES **</h3></center>";
    echo "<ol>";
    foreach($errores as $item){
        echo "<li>$item</li>";
    }
    echo "</ol>";
}else{
    echo "<center><h3>** DATOS **</h3></center>";
    echo "<b>Email:</b>$email<br>";
    echo "<b>Password:</b>$pass<br>";
    echo "<b>Provincia:</b>$provincia<br>";
    echo "<b>Aficiones</b><br>";
    echo "<ol>";
    foreach($aficiones_recogidas as $item){
        echo "<li>$item</li>";
    }
    echo "</ol>";
}






