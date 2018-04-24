<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerteneceM extends Model
{
    /*               Schema::create('pertenece', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cooperativa')->unsigned();
            $table->integer('id_privilegio')->unsigned();
            $table->string('estado');
            $table->foreign('id_cooperativa')->references('id')->on('cooperativa');
            $table->foreign('id_privilegio')->references('id')->on('privilegio');
            $table->engine = 'InnoDB';
            $table->timestamps();
        });
         */
		protected $table='pertenece';
        protected $fillable = ['id', 'id_cooperativa', 'id_privilegio','estado'];
}
