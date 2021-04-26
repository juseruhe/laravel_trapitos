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
            $table->string('nombre_producto');
            $table->string('imagen');
            $table->bigInteger('talla_id')->unsigned();
            $table->bigInteger('color_id')->unsigned();
            $table->string('material');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('clasificacion_id')->unsigned();
            $table->string('valor');
            $table->string('cantidad');

            $table->foreign('color_id')->references('id')->on('colores');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('clasificacion_id')->references('id')->on('clasificaciones');
            $table->foreign('talla_id')->references('id')->on('tallas');
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
