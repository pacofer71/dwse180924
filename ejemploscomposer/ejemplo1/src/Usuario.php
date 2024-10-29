<?php
namespace App;

class Usuario{
    private string  $nombre;
    private string  $apellidos;
    private string  $email;
    private string  $username;
    private string  $ciudad;
    private string  $pais;
    private string  $card;
    private string  $perfil;
    private int $edad;
    private const PERFILES=['Admin', 'User', 'Guest', 'Root'];

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of username
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set the value of ciudad
     */
    public function setCiudad(string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Set the value of pais
     */
    public function setPais(string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Set the value of card
     */
    public function setCard(string $card): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Set the value of perfil
     */
    public function setPerfil(string $perfil): self
    {
        $this->perfil = $perfil;

        return $this;
    }

    //---------------------------------------------------------------------
    public static function crearUsuarios(int $cantidad): array{
        $usuarios=[];
        $faker=\Faker\Factory::create('es_ES');
        for($i=0; $i<$cantidad; $i++){
            $nombre=$faker->firstName();
            $apellidos=$faker->lastName()." ".$faker->lastName();
            $email=$faker->unique()->email();
            $username=$faker->unique()->userName();
            $ciudad=$faker->city();
            $pais=$faker->country();
            $card=$faker->unique()->creditCardNumber('Visa', true);
            $perfil=$faker->randomElement(self::PERFILES);
            $edad=$faker->numberBetween(18,99);
            $usuario=(new Usuario)
            ->setNombre($nombre)
            ->setApellidos($apellidos)
            ->setEmail($email)
            ->setUsername($username)
            ->setCiudad($ciudad)
            ->setPais($pais)
            ->setPerfil($perfil)
            ->setCard($card)
            ->setEdad($edad);
            $usuarios[]=$usuario;

        }
        return $usuarios;

    }

    

    /**
     * Set the value of edad
     */
    public function setEdad(int $edad): self
    {
        $this->edad = $edad;

        return $this;
    }
}