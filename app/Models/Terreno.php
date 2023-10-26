<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terreno extends Model
{
    use HasFactory;

    //definir o nome da tabela que esse model representa
    //caso nao informe essa linha ele ira pegar o nome da classe mas no plural, por exemplo terrenos
    protected $table = 'terreno';

    protected $fillable = [
        'nome',
        'cidade',
    ];
}
