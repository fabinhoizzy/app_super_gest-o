<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function __contruct(){
        $this->middleware('log.acesso');
    }

    public function sobreNos() {
        return view('site.sobrenos');
    }
}
