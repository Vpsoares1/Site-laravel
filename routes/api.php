<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\RoupasController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/salvar_produto', [ProdutoController::class, 'salvar_produto']);
Route::post('/salvar_roupa', [RoupasController::class, 'salvar_roupa']);
