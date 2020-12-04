<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentas73sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas73s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente');
            $table->integer('id_usuario');
            $table->string('tipo_comprobante');
            $table->string('serie_comprobante');
            $table->string('num_comprobante');
            $table->string('fecha_hora');
            $table->integer('impuesto');
            $table->integer('total');
            $table->string('estado');
            $table->timestamps();

           $table->foreign('id_cliente')->references('id')->on('personas73s')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_usuario')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas73s');
    }
}
