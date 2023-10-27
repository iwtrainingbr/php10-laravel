<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public $tokens = [
        '1q2w3e',
        '123123',
        'ababab',
    ];

    public function getAll(Request $request)
    {
        $token = $request->header('token');

        if (!in_array($token, $this->tokens)) {
            return [
                'error' => 'Access Denied',
            ];
        }

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
        $dados = Categoria::find($id);
        $dados->update($request->all());

        return $dados;
    }

    public function remove($id) 
    {
        Categoria::find($id)->delete();

        return [];
    }
}
