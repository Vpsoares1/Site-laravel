<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteControler extends Controller
{
    public function ola_marquinhos(Request $request){
    return view('teste');
    }  

}
