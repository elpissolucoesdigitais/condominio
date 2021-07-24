<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero');
            $table->string('andar');
            $table->string('interfone');
            $table->double('valor',10,2);
            $table->timestamps();

            $table->unsignedBigInteger('bloco_id');
            $table->foreign('bloco_id')
                        ->references('id')
                        ->on('blocos')
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
        Schema::dropIfExists('apartamentos');
    }
}
