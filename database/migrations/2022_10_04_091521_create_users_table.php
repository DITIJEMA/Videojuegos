<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 30);
            $table->string('apellido_p', 20);
            $table->string('apellido_m', 20);
            $table->unsignedBigInteger('tipo_empleado');
            $table->date('fecha_creacion');
            $table->string('direccion', 60);
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_estatus');
            $table->string('email', 60);
            $table->string('password', 50);
            $table->string('telefono', 10);

            $table->foreign('tipo_empleado')->references('id')->on('employees');
            $table->foreign('id_estado')->references('id')->on('states');
            $table->foreign('id_estatus')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
