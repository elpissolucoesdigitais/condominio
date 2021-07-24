<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controle_pagamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->double('total_aberto',10,2);
            $table->double('total_pago',10,2);
            $table->double('total_a_pagar',10,2);
            $table->double('multas',10,2);
            $table->double('outros',10,2);
            $table->string('observacoes');
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
        Schema::dropIfExists('controle_pagamentos');
    }
}
