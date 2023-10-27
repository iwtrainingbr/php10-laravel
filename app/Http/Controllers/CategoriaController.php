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

    public function insert(Request $request)
    {
        // return Categoria::create($request->all());

        $data = Categoria::create([
            'nome' => $request->nome, // $request->get('nome')
            'descricao' => $request->descricao,
        ]);

        return $data;
    }

    public function update(Request $request, $id)
    {

    }

    public function remove($id) 
    {
        Categoria::find($id)->delete();

        return [];
    }
}
