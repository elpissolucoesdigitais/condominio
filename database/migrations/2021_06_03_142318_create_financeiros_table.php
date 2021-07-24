<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeiros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data_financeiro');
            $table->timestamps();

            $table->unsignedBigInteger('bloco_id');
            $table->foreign('bloco_id')
                        ->references('id')
                        ->on('blocos')
                        ->onDelete('cascade');

            $table->unsignedBigInteger('fluxo_caixas_id');
            $table->foreign('fluxo_caixas_id')
                        ->references('id')
                        ->on('fluxo_caixas')
                        ->onDelete('cascade');

            $table->unsignedBigInteger('impostos_id');
            $table->foreign('impostos_id')
                        ->references('id')
                        ->on('impostos')
                        ->onDelete('cascade');

            $table->unsignedBigInteger('consumos_id');
            $table->foreign('consumos_id')
                        ->references('id')
                        ->on('consumos')
                        ->onDelete('cascade');

            $table->unsignedBigInteger('funcionarios_id');
            $table->foreign('funcionarios_id')
                        ->references('id')
                        ->on('funcionarios')
                        ->onDelete('cascade');

            $table->unsignedBigInteger('controle_pagamentos_id');
            $table->foreign('controle_pagamentos_id')
                        ->references('id')
                        ->on('controle_pagamentos')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financeiros');
    }
}
