<?php
//Cliente Backend
namespace src\Backend;

class Cliente
{
    public function __construct(private string $nombre)
    {
        echo "<br>Creado un objeto Cliente del backend.";
    }

    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }
}
