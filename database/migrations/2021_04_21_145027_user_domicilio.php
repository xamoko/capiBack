<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserDomicilio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_domicilio', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('nombre_usuario');
            $table->string('domicilio');
            $table->string('numero_exterior');
            $table->string('colonia');
            $table->string('cp');
            $table->string('ciudad');
            $table->string('fecha_nacimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
