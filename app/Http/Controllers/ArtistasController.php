<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    public function artistas(Request $request){
    return view('artistas');
   }
}
