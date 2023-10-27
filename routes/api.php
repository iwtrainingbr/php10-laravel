<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TerrenoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/terrenos', [
    TerrenoController::class,
    'listApi'
]);

Route::prefix('categorias')->group(function () {
    Route::get('', [
        CategoriaController::class,
        'getAll',
    ]);
    
    Route::get('/{id}', [
        CategoriaController::class,
        'getById',
    ]);
    
    Route::post('', [
        CategoriaController::class,
        'insert',
    ]);
    
    Route::patch('/{id}', [
        CategoriaController::class,
        'update',
    ]);
    
    Route::delete('/{id}', [
        CategoriaController::class,
        'remove',
    ]);
});

