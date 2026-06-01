<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamanhoController extends Controller
{
    public function tamanho(Request $request){
    return view('filtro_tamanho');
   }
}
