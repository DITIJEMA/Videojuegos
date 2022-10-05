<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_m', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_videojuego');
            $table->timestamps();

            $table->foreign('id_cliente')->references('cliente_id')->on('client');
            $table->foreign('id_videojuego')->references('id')->on('videogames');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_m');
    }
}
