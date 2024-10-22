<?php
namespace src;

const MAY_ON=1;
const MAY_OFF=0;

class Utils{
    public static function saludo(string $nombre){
        echo "<br>Hola $nombre, buenos dias";
    }
}