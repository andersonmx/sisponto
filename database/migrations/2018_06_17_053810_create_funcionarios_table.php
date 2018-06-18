<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('rg');
            $table->string('cpf');
            $table->string('nasc');
            $table->string('pis');
            $table->string('cidade');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('numcasa');
            $table->string('cep');
            $table->string('complemento');
            $table->string('cargo');
            $table->string('departamento');
            $table->string('admissao');
            $table->string('ferias');
            $table->string('salario');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
