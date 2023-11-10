<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Util\TerrenoUtil;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function test_somar_10_com_20_da_30(): void
    {
        $resultado = 10 + 20;

        $this->assertEquals(30, $resultado);
    }

    public function test_calcular_area_com_lados_iguais(): void
    {
        $resultado = TerrenoUtil::calcularArea(10, 10);

        $this->assertEquals(100, $resultado);
    }

    public function test_calcular_area_com_lados_diferentes(): void
    {
        $resultado = TerrenoUtil::calcularArea(10, 20);

        $this->assertEquals(200, $resultado);
    }

    
}
