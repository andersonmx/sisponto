<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\funcionario;
use App\Models\cargo;



class UserController extends Controller
{

    public function cfunc(){
        return view ('cadastrofunc');
    }

    public function cargo(){
        return view ('cargo');
    }

    public function relatorios(){
        return view ('userrelatorios');
    }

    public function cadcargo(){
        return view ('cadcargo');
    }

    public function cadfuncok(){
        return view ('cadastrorealizado');
    }


    public function func(){
        return view ('funcionarios');
    }


    public function alterar(){
        return view ('alterardados');
    }

    public function alterarcargo(){
        return view ('alterarcargo');
    }
    


    public function alteracao(){
        return view ('alteracao');
    }


    public function departamento(){
        return view ('dpt');
    }


    public function altdepartamento(){
        return view ('altdpt');
    }

    public function criardpt(){
        return view ('caddpt');
    }

    public function just(){
        return view ('justificativa');
    }


    public function cliente(){
        return view ('cadastrofunc');
    }

    public function salvar(Request $request) {
        $request->validate([
            'nome'      => 'required',
            'email'      => 'required',
            'rg'      => 'required',
            'cpf'      => 'required',
            'nasc'      => 'required',
            'pis'      => 'required',
            'cidade'      => 'required',
            'endereco'      => 'required',
            'bairro'      => 'required',
            'numcasa'      => 'required',
            'cep'      => 'required',
            'complemento'      => 'required',
            'cargo'      => 'required',
            'departamento'      => 'required',
            'admissao'  => 'required',
            'ferias'  => 'required',
            'salario'  => 'required',
            'status'  => 'required'
        ]);
        
        $funcionario = new funcionario;
        $funcionario->nome = $request->nome;
        $funcionario->email = $request->email;
        $funcionario->rg = $request->rg;
        $funcionario->cpf = $request->cpf;
        $funcionario->nasc = $request->nasc;
        $funcionario->pis = $request->pis;
        $funcionario->cidade = $request->cidade;
        $funcionario->endereco = $request->endereco;
        $funcionario->bairro = $request->bairro;
        $funcionario->numcasa = $request->numcasa;
        $funcionario->cep = $request->cep;
        $funcionario->complemento = $request->complemento;
        $funcionario->cargo = $request->cargo;
        $funcionario->departamento = $request->departamento;
        $funcionario->admissao = $request->admissao;
        $funcionario->ferias = $request->ferias;
        $funcionario->salario = $request->salario;
        $funcionario->status = $request->status;
        $funcionario->save();
        return redirect('funcionarios');
        
    }

    public function salvarcargo(Request $request) {
        $request->validate([
            'nomedocargo'      => 'required',
            'mes'      => 'required',
            'salario'      => 'required'
           
        ]);
        
        $cargo = new cargo;
        $cargo->nomedocargo = $request->nomedocargo;
        $cargo->mes = $request->mes;
        $cargo->salario = $request->salario;
        
        $cargo->save();
        return redirect('cargo');
        
    }


    public function salvardpt(Request $request) {
        $request->validate([
            'nome'      => 'required'
        ]);
        
        $departamento = new departamento;
        $departamento->nome = $request->nome;
        $departamento->save();
        return redirect('dpt');
        
    }

    
}
