<?php

$tiposValidos=['image/gif', 'image/png', 'image/jpeg', 'image/bmp', 'image/webp'];
const TAM_MAX=2000000; //2MB

function sanearCadenas(string $cadena): string{
    return(htmlspecialchars(trim($cadena)));
}

function isEmailValido(string $email):bool{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['errEmail']='*** Error, introduza una dirección de email válida.';
        return false;
    }
    return true;
}
//funcion para verificar que el archivo subido sea una imagen y no exceda los 2MB en este ejemplo
function isImagenValida(string $tipo, int $size):bool{ 
    global $tiposValidos;
    if(!in_array($tipo, $tiposValidos)){
        $_SESSION['errImagen']="***Error se esperaba un archivo de imagen";
        return false;
    }
    if($size>TAM_MAX){
        $_SESSION['errImagen']="*** Error, la imagen excede los 2MB permitidos";
        return false;
    }
    return true;
}

function pintarErrores(string $nom): void{
    if(isset($_SESSION[$nom])){
        echo "<p class='text-red-500 italic text-sm mt-2'>{$_SESSION[$nom]}</p>";
        unset($_SESSION[$nom]);
    }
}

    