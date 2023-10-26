<?php

use App\Http\Controllers\TerrenoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', [
    TerrenoController::class,
    'teste'
]);


Route::any('/terrenos/add', [TerrenoController::class, 'add']);
Route::get('/terrenos', [TerrenoController::class, 'list']);