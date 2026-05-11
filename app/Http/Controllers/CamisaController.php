<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamisaController extends Controller
{
     public function camisas_loja(Request $request){
    return view('camisas');
   }
}

