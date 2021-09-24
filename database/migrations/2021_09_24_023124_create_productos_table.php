<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('estado');
            $table->string('imagen');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->unsignedBigInteger('idtipo');
            $table->foreign('idtipo')->references('id')->on('tipos');
            $table->unsignedBigInteger('idprecio');
            $table->foreign('idprecio')->references('id')->on('precios');
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
        Schema::dropIfExists('productos');
    }
}
