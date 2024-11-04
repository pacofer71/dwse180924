<?php
namespace App;
class Utils{
    public static function sanearCadenas(string $cad): string{
        return htmlspecialchars(trim($cad));
    }

    public static function isCadenaOk(string $nomCampo, string $valor, int $tMin, int $tMax): bool{
        if(strlen($valor)<$tMin || strlen($valor)>$tMax){
            $_SESSION["err_$nomCampo"]="***Error $nomCampo debe tener entre $tMin y $tMax caracteres";
            return false;
        }
        return true;
    }
    public static function isCampoNumberOk(string $nomCampo, int|float $valor, int $vMin, int|float $vMax): bool{
        if($valor<$vMin || $valor>$vMax){
            $_SESSION["err_$nomCampo"]="***Error $nomCampo debe tener estar $vMin y $vMax";
            return false;
        }
        return true;
    }

    public static function pintarError(string $nomError): void{
        if(isset($_SESSION[$nomError])){
            echo "<p class='text-red-700 italic mt-2 text-sm'>{$_SESSION[$nomError]}</p>";
            unset($_SESSION[$nomError]);
        }
    }
}