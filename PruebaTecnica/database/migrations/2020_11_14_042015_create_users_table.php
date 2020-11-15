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
            $table->increments('IdUsuario')->unsigned();
            $table->char('NumeroDeIdentificacion',12);
            $table->string('PrimerNombre',55);
            $table->string('SegundoNombre',55)->nullable();
            $table->string('Apellidos',55);
            $table->string('Direccion',55);
            $table->string('Telefono', 12);
            $table->integer('FkRolUsuario')->unsigned();
            $table->foreign('FkRolUsuario')->references('IdRol')->on('rols');
            $table->integer('FkCiudades')->unsigned();
            $table->foreign('FkCiudades')->references('IdCiudad')->on('cities');
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
        Schema::dropIfExists('users');
    }
}
