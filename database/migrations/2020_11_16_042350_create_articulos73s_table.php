<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulos73sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos73s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_categoria');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('precio_venta');
            $table->string('stock');
            $table->string('descripcion');
            $table->string('condicion');
            $table->timestamps();
            $table->foreign('id_categoria')->references('id')->on('categorias73s')
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
        Schema::dropIfExists('articulos73s');
    }
}
