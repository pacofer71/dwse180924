<?php
namespace src;

class Cliente{
    public function __construct(public readonly int $totalCompra)
    {
        
    }
    public function getPrecioFinal(float $descuento):float{
        return $this->totalCompra*(1-$descuento/100);
    }
}