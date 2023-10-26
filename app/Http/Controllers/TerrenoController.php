<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Terreno;
use Illuminate\Support\Facades\DB;

class TerrenoController extends Controller
{
    
    public function listApi() 
    {
        return Terreno::all();
    }
    public function list() 
    {
        // $terrenos = DB::select('SELECT * FROM terreno ORDER BY nome');

        $terrenos = Terreno::all();

        return view('terreno/list', [
            'terrenos' => $terrenos,
        ]);
    }

    public function add() 
    {
        if ($_POST) {
            // DB::select("INSERT INTO tb_terreno VALUES(nome, cidade)...")

            Terreno::create([
                'nome' => $_POST['nome'],
                'cidade' => $_POST['cidade'],
            ]);

            redirect('/terrenos');
        }

        return view('terreno/add');
    }
}