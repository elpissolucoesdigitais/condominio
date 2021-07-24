<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impostos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('iptu',10,2);
            $table->double('inpc',10,2);
            $table->double('receita_federal',10,2);
            $table->double('rais',10,2);
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
        Schema::dropIfExists('impostos');
    }
}
