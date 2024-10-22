<?php 
class Empleado extends Persona{
    private string $puesto;
    private string $oficina;

    public function __construct(string $nombre, string $provincia, string $puesto, string $oficina)
    {
        parent::__construct($nombre, $provincia);
        $this->puesto=$puesto;
        $this->oficina=$oficina;

    }

    public function __toString(): string
    {
        return parent::__toString().", el puesto es: <b>{$this->puesto}</b> y la oficina: <b>{$this->oficina}</b>";
    }

    /**
     * Get the value of puesto
     */
    public function getPuesto(): string
    {
        return $this->puesto;
    }

    /**
     * Set the value of puesto
     */
    public function setPuesto(string $puesto): self
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Get the value of oficina
     */
    public function getOficina(): string
    {
        return $this->oficina;
    }

    /**
     * Set the value of oficina
     */
    public function setOficina(string $oficina): self
    {
        $this->oficina = $oficina;

        return $this;
    }
}