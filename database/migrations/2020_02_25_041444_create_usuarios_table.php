<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_u');
            $table->string('app_u');
            $table->string('apm_u');
            $table->date('fn_u');
            $table->string('genero_u');
            $table->string('col_u');
            $table->string('typeuser');
            $table->string('calle_u');
            $table->string('mum_u');
            $table->string('correo');
            $table->string('vercorreo');
            $table->string('password');
            $table->string('verpassword');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
