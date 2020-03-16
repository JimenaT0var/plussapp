<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentoHorarioDia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamento_horario_dia', function (Blueprint $table) {
            $table->bigIncrements('idmhd');
            $table->bigInteger('id_m')->unsigned();
            $table->foreign('id_m')->references('id_m')->on('medicamentos');
            $table->bigInteger('id_d')->unsigned();
            $table->foreign('id_d')->references('id_d')->on('dias');
            $table->bigInteger('id_h')->unsigned();
            $table->foreign('id_h')->references('id_h')->on('horarios');
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
        Schema::dropIfExists('medicamento_horario_dia');
    }
}
