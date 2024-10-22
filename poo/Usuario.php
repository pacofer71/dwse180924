<?php
class Usuario
{
    private string $nombre;
    private string $provincia;
    private bool $isAdmin;
    private float $sueldo;
    private static int $cont = 0;

    //NO hay sobrecarga de metodos
    public function __construct()
    {
        $num = func_num_args();
        //1 seteo nombre, 2 nomb{re y prov, 3 nom prov isadmin, 4 nombre prov isadmin sueldo 
        // var_dump(func_get_args()); //func_get_arg(0) == func_get_args()[0]
        if ($num == 1) {
            $this->setNombre(func_get_arg(0)); //$this->nombre=func_get_arg(0);
        }
        if ($num == 2) {
            $this
                ->setNombre(func_get_arg(0))
                ->setProvincia(func_get_arg(1));
        }
        self::$cont++;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of provincia
     */
    public function getProvincia(): string
    {
        return $this->provincia;
    }

    /**
     * Set the value of provincia
     */
    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get the value of isAdmin
     */
    public function isIsAdmin(): bool
    {
        return $this->isAdmin;
    }

    /**
     * Set the value of isAdmin
     */
    public function setIsAdmin(bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get the value of sueldo
     */
    public function getSueldo(): float
    {
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     */
    public function setSueldo(float $sueldo): self
    {
        $this->sueldo = $sueldo;

        return $this;
    }
    /**
     * *
     * Get the value of cont
     */
    public static function getCont(): int
    {
        return self::$cont;
    }
}
//---
$usuario = (new Usuario)
    ->setNombre("Manolo")
    ->setProvincia("Granada")
    ->setIsAdmin(true)
    ->setSueldo(1234.78);

var_dump($usuario);
echo "<br>";
//$usuario2 = new Usuario("Ana Perez");
echo Usuario::getCont();
echo "<br>";
//echo $usuario::getCont(); se puede hacer pero se recomienda usar la clase

$usuario2 = new Usuario("Ana Maria");
var_dump($usuario2);

$usuario3 = new Usuario("Ana Josefa", "Madrid");
var_dump($usuario3);
