<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusM extends Model
{
    /*        Schema::create('bus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_linea')->unsigned();
            $table->string('placa');
            $table->string('estado');
            $table->integer('capacidad');
            $table->engine = 'InnoDB';
            $table->foreign('id_linea')->references('id')->on('linea');
            $table->timestamps();
        });*/
        protected $table='bus';
        protected $fillable = ['id', 'id_linea', 'placa','estado','capacidad'];
}
