<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteControler;
use App\Http\Controllers\CamisaController;
use App\Http\Controllers\ShortsController;
use App\Http\Controllers\InvernoController;
use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\FiltroController;
use App\Http\Controllers\TamanhoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\RoupasController;


Route::get('/ola_marquinhos', [TesteControler::class, 'ola_marquinhos'])->name('inicio');
Route::get('/camisas', [CamisaController::class, 'camisas_loja'])->name('camisas');
Route::get('/shorts', [ShortsController::class, 'shorts'])->name('shorts');
Route::get('/inverno', [InvernoController::class, 'inverno'])->name('inverno');
Route::get('/artistas', [ArtistasController::class, 'artistas'])->name('artistas');
Route::get('/filtro', [FiltroController::class, 'filtro'])->name('filtro');
Route::get('/filtro_tamanho', [TamanhoController::class, 'tamanho'])->name('tamanho');
Route::get('/cadastro_produto', [ProdutoController::class, 'cadastro_produto'])->name('cadastro_produto');
Route::get('/lista_produto', [ProdutoController::class, 'lista_produto'])->name('lista_produto');
Route::get('/cadastro_roupa', [RoupasController::class, 'cadastro_roupa'])->name('cadastro_roupa');
Route::get('/lista_roupa', [RoupasController::class, 'lista_roupa'])->name('lista_roupa');