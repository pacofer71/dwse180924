<?php
namespace Src\Models;
class Pelicula{
    private string $titulo;
    private string $sinopsis;
    private string $poster;
    private float $puntuacion;

    
    /**
     * Get the value of titulo
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of sinopsis
     */
    public function getSinopsis(): string
    {
        return $this->sinopsis;
    }

    /**
     * Set the value of sinopsis
     */
    public function setSinopsis(string $sinopsis): self
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }

    /**
     * Get the value of poster
     */
    public function getPoster(): string
    {
        return $this->poster;
    }

    /**
     * Set the value of poster
     */
    public function setPoster(string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get the value of puntuacion
     */
    public function getPuntuacion(): float
    {
        return $this->puntuacion;
    }

    /**
     * Set the value of puntuacion
     */
    public function setPuntuacion(float $puntuacion): self
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }
}