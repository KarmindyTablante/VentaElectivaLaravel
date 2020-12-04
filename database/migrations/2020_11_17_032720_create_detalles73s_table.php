<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalles73sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles73s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_venta');
            $table->integer('id_articulo');
            $table->string('cantidad');
            $table->string('precio');
            $table->string('descuento');
            $table->timestamps();

            $table->foreign('id_venta')->references('id')->on('ventas73s')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_articulo')->references('id')->on('articulos73s')
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
        Schema::dropIfExists('detalles73s');
    }
}
