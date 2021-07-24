<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moradores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('email');
            $table->integer('celular');
            $table->string('morador_ativo');
            $table->string('cpf');
            $table->string('rg');
            $table->date('data_cadastro');
            $table->timestamps();

            $table->unsignedBigInteger('apartamento_id');
            $table->foreign('apartamento_id')
                        ->references('id')
                        ->on('apartamentos')
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
        Schema::dropIfExists('moradores');
    }
}
