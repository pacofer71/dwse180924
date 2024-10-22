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
    //getter de $cont
    public static function getCont(): int{
        return self::$cont;
    }

    public function __toString(): string
    {
        $soyAdmin=($this->isAdmin) ? "Administrador" : "Usuario Normal";
        return "El nombre es:<b>".$this->getNombre()."</b>, 
            la provincia es: <b>".$this->provincia."</b>, El sueldo: <i>".$this->sueldo."</i>€ 
            y el tipo de usuario es: $soyAdmin<br>, has instanciado: ".self::getCont()." objetos";
    }
}

$usuario1=(new Usuario)
->setNombre("Manolo")
->setProvincia("Granada")
->setIsAdmin(true)
->setSueldo(1234.78);
//copia de objetos

$usuario2=$usuario1;
echo "USUARIO 1";
var_dump($usuario1);
echo "<br>USUARIO 2";
var_dump($usuario2);

$usuario2->setProvincia("La Coruña");
echo "USUARIO 1";
var_dump($usuario1);
echo "<br>USUARIO 2";
var_dump($usuario2);

$usuario3=clone($usuario1);
echo "USUARIO 1";
var_dump($usuario1);
echo "<br>USUARIO 2";
var_dump($usuario2);
echo "<br>USUARIO 3";
var_dump($usuario3);
echo "<hr>";
$usuario3->setNombre("Pepe Prado");
echo "USUARIO 1";
var_dump($usuario1);
echo "<br>USUARIO 2";
var_dump($usuario2);
echo "<br>USUARIO 3";
var_dump($usuario3);


echo $usuario1;

echo "<br> La clase de usuario3 es: ".get_class($usuario3);
echo "-->Clase usuario:".Usuario::class;

echo "La instancias son: ".Usuario::getCont();
echo "<br>La provincia de usuario3 es: ".$usuario3->getProvincia();