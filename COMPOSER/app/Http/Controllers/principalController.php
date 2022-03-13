<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class principalController extends Controller
{
    public function principal(){
        return view('site.principal');
    }

    public function sobrenos(){
        return view('site.sobre-nos');
    }
}



