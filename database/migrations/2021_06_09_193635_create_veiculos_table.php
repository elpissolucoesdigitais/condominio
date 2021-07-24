<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ano');
            $table->string('modelo');
            $table->string('placa');
            $table->timestamps();

            $table->unsignedBigInteger('vaga_id');
            $table->foreign('vaga_id')
                        ->references('id')
                        ->on('vagas')
                        ->onDelete('cascade');

            $table->unsignedBigInteger('morador_id');
            $table->foreign('morador_id')
                        ->references('id')
                        ->on('moradores')
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
        Schema::dropIfExists('veiculos');
    }
}
