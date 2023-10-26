<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function getAll()
    {
        return Categoria::all(); //SELECT * FROM categoria
    }

    public function getById($id)
    {
        return Categoria::find($id); 
    }
}
