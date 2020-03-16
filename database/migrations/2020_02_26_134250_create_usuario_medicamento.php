<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioMedicamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_medicamento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_m')->unsigned();
            $table->foreign('id_m')->references('id_m')->on('medicamentos');
            $table->bigInteger('id_u')->unsigned();
            $table->foreign('id_u')->references('id_u')->on('usuarios');
            $table->softDeletes();
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
        Schema::dropIfExists('usuario_medicamento');
    }
}
