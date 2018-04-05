<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooperativa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('estado');
            $table->engine = 'InnoDB';
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('id_cooperativa')->unsigned();
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fecha_nacimiento');
            $table->string('cedula');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('password');
            $table->engine = 'InnoDB';
            //$table->foreign('id_cooperativa')->references('id')->on('cooperativa');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('rol', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('estado');
            $table->engine = 'InnoDB';
            $table->timestamps();
        });

        Schema::create('privilegio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cooperativa')->unsigned();
            $table->integer('id_rol')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_rol')->references('id')->on('rol');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_cooperativa')->references('id')->on('cooperativa');
            $table->engine = 'InnoDB';
            $table->timestamps();
        });


        Schema::create('planificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('estado');
            $table->engine = 'InnoDB';
            $table->timestamps();
        });

        Schema::create('linea', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cooperativa')->unsigned();
            $table->integer('id_planificacion')->unsigned();
            $table->integer('numero');
            $table->string('estado');
            $table->engine = 'InnoDB';
            $table->foreign('id_cooperativa')->references('id')->on('cooperativa');
            $table->foreign('id_planificacion')->references('id')->on('planificacion');
            $table->timestamps();
        });
        Schema::create('bus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_linea')->unsigned();
            $table->string('placa');
            $table->string('estado');
            $table->integer('capacidad');
            $table->engine = 'InnoDB';
            $table->foreign('id_linea')->references('id')->on('linea');
            $table->timestamps();
        });
        Schema::create('puntos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_planificacion')->unsigned();
            $table->string('latitud');
            $table->string('longitud');
            $table->engine = 'InnoDB';
            $table->foreign('id_planificacion')->references('id')->on('planificacion');
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
        Schema::dropIfExists('puntos');
        Schema::dropIfExists('bus');
        Schema::dropIfExists('linea');
        Schema::dropIfExists('planificacion');
        
        Schema::dropIfExists('privilegio');
        Schema::dropIfExists('rol');
        Schema::dropIfExists('users');
        Schema::dropIfExists('cooperativa');
    }
}
