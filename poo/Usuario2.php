<?php

class Usuario2{
    public function __construct(
        private string $nombre,
        private string $provincia,
        private float $sueldo
        )
    {
        
    }

}
$usuario=new Usuario2("Manuel", "Almeria", 1234.56);
var_dump($usuario);