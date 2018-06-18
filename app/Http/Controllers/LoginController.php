<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\conta;

class LoginController extends Controller
{
    /** Abre a view da tela de login */
    public function login() {
        return view('logar');
    }
    
    /** Tenta realizar o login */
    public function logar(Request $request) {
        
        if ($request->nome == 'anderson' && $request->senha == '14253636') {
            session(['usuario' => 'Anderson']);
            return redirect()->route('principal');
        }
        return redirect()->route('login')->with('erro', 'Senha ou Login inválido');
    }

    /** Desloga o usuário */
    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('login');
    }

    public function bemvindo(){
        return view ('welcome');
    }
}
