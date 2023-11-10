<?php

namespace Tests\Feature;

use App\Models\Terreno;
use Tests\TestCase;

class TerrenoModelTest extends TestCase
{
    // construtor da classe / __construct()
    // new Terreno();

    public function test_quando_cadastrar_um_terreno_aumenta_a_qtd_de_terrenos(): void
    {
        $quantidade = count(Terreno::all());

        Terreno::create([
            'nome' => 'Terreno teste',
            'cidade' => 'Cidade teste',
        ]);

        $novaQuantidade = count(Terreno::all());

        $this->assertEquals($quantidade+1, $novaQuantidade);
    }
}
