<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Input;

class CadastroController extends Controller
{
    public function cadastrousuario(){
        return view ('cadastrousuario');
    }

    public function logar(Request $request) {
        $request->validate([
            'usuario'  => 'required',
            'senha'    => 'required'
        ]);
    
        $usuario = new usuario;

            $usuario->usuario = $request->usuario;
            $usuario->senha = $request->senha;

            $usuario->save();
    return view ('welcome');
    
    }


}
