<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanificacionM extends Model
{
    /*        Schema::create('planificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('estado');
            $table->engine = 'InnoDB';
            $table->timestamps();
        });*/
        protected $table='planificacion';
        protected $fillable = ['id', 'nombre', 'estado'];
}
