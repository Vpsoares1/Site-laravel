<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiltroController extends Controller
{
    public function filtro (Request $request){
    return view('filtro');
   }
}
