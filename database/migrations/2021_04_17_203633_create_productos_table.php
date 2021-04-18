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
            $table->string('nombre_producto')->unsigned();
            $table->string('imagen');
            $table->string('talla');
            $table->string('color');
            $table->string('material');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('claficacion_id')->unsigned();
            $table->string('valor');
            $table->string('cantidad');

            $table->foreign('categoria_id')->references('id')->on('tipo_documentos');
            $table->foreign('claficacion_id')->references('id')->on('generos');

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
