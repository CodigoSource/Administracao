<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('registro')->unique();
            $table->string('cpfcnpj')->unique();
            $table->string('telefone');
            $table->string('celular');
            $table->string('email')->unique();
            $table->string('emailsec')->unique();
            $table->string('sexo',1);
            $table->string('ehcliente',1)->default('N');
            $table->string('ehfornecedor',1)->default('N');
            $table->string('ehfuncionario',1)->default('N');
            $table->string('complemento')->nullable();
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
        Schema::dropIfExists('pessoas');
    }
}
