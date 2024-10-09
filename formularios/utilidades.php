<?php
$provincias = [
    'Almería',
    'Cadiz',
    'Córdoba',
    'Granada',
    'Huelva',
    'Jaén',
    'Málaga',
    'Sevilla',
];
$aficiones = [
    'Ciclismo',
    'Cine',
    'Lectura',
    'Otras'
];
function limpiarCadenas(string $nombre): String{
    return htmlspecialchars(trim($nombre));
}
function pintarErrores(string $nombreVarSesion){
    if(isset($_SESSION[$nombreVarSesion])){
        echo "<p class='text-red-500 italic mt-4 text-sm'>".$_SESSION[$nombreVarSesion]."</p>";
        unset($_SESSION[$nombreVarSesion]);
    }
}