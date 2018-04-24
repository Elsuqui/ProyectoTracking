<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaM extends Model
{
    /*        Schema::create('linea', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cooperativa')->unsigned();
            $table->integer('id_planificacion')->unsigned();
            $table->integer('numero');
            $table->string('estado');
            $table->engine = 'InnoDB';
            $table->foreign('id_cooperativa')->references('id')->on('cooperativa');
            $table->foreign('id_planificacion')->references('id')->on('planificacion');
            $table->timestamps();
        });*/

        protected $table='linea';
        protected $fillable = ['id', 'id_cooperativa', 'id_planificacion','numero','estado'];
}
