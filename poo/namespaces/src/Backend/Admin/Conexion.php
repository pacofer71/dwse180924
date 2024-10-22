<?php
namespace src\Backend\Admin;

class Conexion{
    public static function saludoAdmin(string $nombre="Admin"){
        echo "<br>Saludo desde la clase Admin el nombre es:$nombre";
    }
}