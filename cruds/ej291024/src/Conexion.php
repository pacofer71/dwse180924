<?php
namespace App;

use \Exception;
use \PDO; //pondremos la bbara de incio en cualquier clase que no esté en src
use \PDOException;

class Conexion{
    private static ?PDO $conexion=null;

    public static function getConexion(): ?PDO{
        if(self::$conexion===null){
            self::setConexion();
        }
        return self::$conexion;
    }

    public static function setConexion(){
        $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__."/../");
        $dotenv->load();
        //cargamos las variables del archivo de .env
        $usuario=$_ENV['USUARIO'];
        $host=$_ENV['HOST'];
        $pass=$_ENV['PASS'];
        $db=$_ENV['DATABASE'];
        $port=$_ENV['PORT'];
        //Creamos el dsn (descriptor de nombre de servicio), en nuestro caso para mysql
        $options=[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT=>true
        ];
        $dsn="mysql:dbname=$db;port=$port;host=$host;charset=utf8mb4";
        try{
            self::$conexion=new PDO($dsn, $usuario, $pass, $options);
        }catch(PDOException $ex){
            throw new Exception("Error en la conexion: {$ex->getMessage()}", 1);
        }
    }
}