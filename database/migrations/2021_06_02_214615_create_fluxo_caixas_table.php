<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFluxoCaixasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fluxo_caixas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->double('valor_entrada',10,2);
            $table->date('data_entrada');
            $table->double('valor_saida',10,2);
            $table->date('data_saida');
            $table->double('valor_total',10,2);
            $table->string('descricao');
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
        Schema::dropIfExists('fluxo_caixas');
    }
}
