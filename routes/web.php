<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteControler;
use App\Http\Controllers\CamisaController;
use App\Http\Controllers\ShortsController;
use App\Http\Controllers\InvernoController;
use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\FiltroController;


Route::get('/ola_marquinhos', [TesteControler::class, 'ola_marquinhos'])->name('inicio');
Route::get('/camisas', [CamisaController::class, 'camisas_loja'])->name('camisas');
Route::get('/shorts', [ShortsController::class, 'shorts'])->name('shorts');
Route::get('/inverno', [InvernoController::class, 'inverno'])->name('inverno');
Route::get('/artistas', [ArtistasController::class, 'artistas'])->name('artistas');
Route::get('/filtro', [FiltroController::class, 'filtro'])->name('filtro');