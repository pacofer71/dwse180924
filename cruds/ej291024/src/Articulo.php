<?php

namespace App;

use Exception;
use \PDOException;
use \PDO;


class Articulo extends Conexion
{
    private int $id;
    private string $nombre;
    private string $descripcion;
    private float $precio;
    private int $stock;

    //-------------------- CRUD ----------------------------------------
    public function crear()
    {
        $q = "insert into articulos(nombre, descripcion, precio, stock) 
        values(:n, :d, :p, :s)";
        $stmt = parent::getConexion()->prepare($q);
        try {
            $stmt->execute([
                ':n' => $this->nombre,
                ':d' => $this->descripcion,
                ':p' => $this->precio,
                ':s' => $this->stock
            ]);
        } catch (PDOException $ex) {
            throw new \Exception("Error en create: " . $ex->getMessage(), 1);
        } finally {
            parent::cerrarConexion();
        }
    }
    //------------------------------------------------------------------
    public function update(int $id){
        $q="update articulos set nombre=:n, descripcion=:d, precio=:p, stock=:s where id=:i";
        $stmt = parent::getConexion()->prepare($q);
        try {
            $stmt->execute([
                ':n' => $this->nombre,
                ':d' => $this->descripcion,
                ':p' => $this->precio,
                ':s' => $this->stock,
                ':i'=>$id
            ]);
        } catch (PDOException $ex) {
            throw new \Exception("Error en create: " . $ex->getMessage(), 1);
        } finally {
            parent::cerrarConexion();
        }
    }
    //------------------------------------------------------------------
    public static function getArticuloById(int $id): bool|Articulo{
        $q="select * from articulos where id=:i";
        $stmt = parent::getConexion()->prepare($q);
        try {
            $stmt->execute([':i'=>$id]);
        } catch (PDOException $ex) {
            throw new \Exception("Error en create: " . $ex->getMessage(), 1);
        } finally {
            parent::cerrarConexion();
        }
        $stmt->setFetchMode(PDO::FETCH_CLASS, Articulo::class);
        $articulo = $stmt->fetch();
        //si no encuentro el articulo devuelve false;
        return $articulo;
    }
    //------------------------------------------------------------------
    public static function read():array{
        $q="select * from articulos order by id desc";
        $stmt=parent::getConexion()->prepare($q);
        try {
            $stmt->execute();
        } catch (PDOException $ex) {
            throw new \Exception("Error en read: " . $ex->getMessage(), 1);
        } finally {
            parent::cerrarConexion();
        }
        //return $stmt->fetchAll(PDO::FETCH_CLASS, Articulo::class);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
        //return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function delete(int $id){
        $q="delete from articulos where id=:i";
        $stmt=parent::getConexion()->prepare($q);
        try {
            $stmt->execute([':i'=>$id]);
        } catch (PDOException $ex) {
            throw new \Exception("Error en delete: " . $ex->getMessage(), 1);
        } finally {
            parent::cerrarConexion();
        }
    } 
    //Metodos para craer registros en faker
    public static function crearArticulosFaker(int $cant)
    {
        $faker = \Faker\Factory::create('es_ES');
        for ($i = 0; $i < $cant; $i++) {
            $nombre = ucfirst($faker->unique()->words(random_int(3, 5), true));
            $descripcion = $faker->text();
            $stock = random_int(0, 20);
            $precio = $faker->randomFloat(2, 10, 9999);
            (new Articulo)
                ->setNombre($nombre)
                ->setDescripcion($descripcion)
                ->setPrecio($precio)
                ->setStock($stock)
                ->crear();
        }
    }

    //metodo para comprobar si el nombre del artículo está duplicado
    public static function existeArticulo(string $nombre, ?int $id=null ): bool{
        
        $q= ($id===null) ? "select count(*) as total from articulos where nombre=:n" :
        "select count(*) as total from articulos where nombre=:n AND id <>:i";
        $stmt=parent::getConexion()->prepare($q);
        try{
            ($id===null) ? $stmt->execute([':n'=>$nombre]) : $stmt->execute([':n'=>$nombre, ':i'=>$id]) ;
        }catch(PDOException $ex){
            throw new \Exception("Error en existeArticulo: " . $ex->getMessage(), 1);
        }finally{
            parent::cerrarConexion();
        }
        //$filas=$stmt->fetch(PDO::FETCH_OBJ);
        $filas=$stmt->fetchAll(PDO::FETCH_ASSOC)[0];
        return ($filas['total']>0);

    } 

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
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
     * Get the value of descripcion
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio(): float
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of stock
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     */
    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }
}
