<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortsController extends Controller
{
    public function shorts (Request $request){
    return view('shorts');
   }
}

