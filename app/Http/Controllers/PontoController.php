<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PontoController extends Controller
{
    public function ponto(){
        return view ('ponto');
    }

    public function telasaida(){
        return view ('saida');
    }

    public function telaentrada(){
        return view ('entrada');
    }
}
