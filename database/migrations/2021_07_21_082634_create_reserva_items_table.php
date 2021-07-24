<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('identificador_item');
            $table->double('valor');
            $table->integer('quantidade');
            $table->timestamps();

            $table->unsignedBigInteger('condominio_id');
            $table->foreign('condominio_id')
                        ->references('id')
                        ->on('condominios')
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
        Schema::dropIfExists('reserva_items');
    }
}
