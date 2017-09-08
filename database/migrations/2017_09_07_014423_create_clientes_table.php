<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('cpf',30);
            $table->string('cep',100);
            $table->string('logradouro',255);
            $table->string('complemento',100);
            $table->string('bairro',60);
            $table->string('localidade',100);
            $table->string('uf',30);
            $table->string('numero',10);
            $table->string('telefone',30);
            $table->string('ibge',10);
            $table->timestamps();
        });
    }

    /**
     *
     *
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
