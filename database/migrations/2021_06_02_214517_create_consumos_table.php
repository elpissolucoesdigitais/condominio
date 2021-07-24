<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_consumo');
            $table->double('valor',10,2);
            $table->date('data_competencia');
            $table->date('vencimento');
            $table->string('status');
            $table->string('descricao')->nullable();
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
        Schema::dropIfExists('consumos');
    }
}
