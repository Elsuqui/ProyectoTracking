<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntosM extends Model
{
    /*        Schema::create('puntos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_planificacion')->unsigned();
            $table->string('latitud');
            $table->string('longitud');
            $table->engine = 'InnoDB';
            $table->foreign('id_planificacion')->references('id')->on('planificacion');
            $table->timestamps();
        });*/
        protected $table='puntos';
        protected $fillable = ['id', 'id_planificacion', 'latitud','longitud'];
}
