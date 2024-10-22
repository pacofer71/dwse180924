<?php
//Cliente Frontend
namespace src\Frontend;

class Cliente
{
    public function __construct(private string $nombre)
    {
        echo "<br>Creado un objeto Cliente del frontend.";
    }

    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }
}
