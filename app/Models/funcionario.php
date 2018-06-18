<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    protected $fillable = ['nome', 'email', 'rg', 'cpf', 'nasc', 'pis', 'cidade', 'endereco', 'bairro', 'numcasa', 'cep', 'complemento', 'cargo', 'departamento', 'admissao', 'ferias', 'salario', 'status'];
}
