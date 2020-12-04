<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonas73sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas73s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('tipo_documento');
            $table->string('num_documento');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
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
        Schema::dropIfExists('personas73s');
    }
}
