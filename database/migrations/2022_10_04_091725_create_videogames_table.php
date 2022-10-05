<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideogamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videogames', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 25);
            $table->string('desarrolladora', 25);
            $table->string('publicador', 25);
            $table->date('fecha_estreno');
            $table->string('descripcion', 100);
            $table->string('codigo', 15);
            $table->integer('stock');
            $table->float('precio', 4, 2);
            $table->bigInteger('id_clasificacion');
            $table->bigInteger('id_region');
            $table->bigInteger('id_genero');
            $table->bigInteger('id_consola');

            $table->foreign('id_clasificacion')->references('id')->on('classification');
            $table->foreign('id_region')->references('id')->on('region');
            $table->foreign('id_genero')->references('id')->on('gender');
            $table->foreign('id_consola')->references('id')->on('console');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videogames');
    }
}
