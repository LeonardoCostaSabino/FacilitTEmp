<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('sexo');
            $table->string('idade');
            $table->string('idade_aposentado');
            $table->string('valor_acumulado')->nullable()->default("NULL");
            $table->string('contribuicao_mensal')->nullable()->default("NULL");
            $table->string('valor_mensal')->nullable()->default("NULL");
            $table->string('reservaEst')->nullable()->default("NULL");
            $table->string('aporte')->nullable()->default("NULL");
            $table->string('perfil')->nullable()->default("NULL");
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
        Schema::drop('clientes');
    }
}
