<?php

namespace App\Util;

class TerrenoUtil
{
    public static function calcularArea(float $lado1, float $lado2): float
    {
        return $lado1 * $lado2;
    } 
}