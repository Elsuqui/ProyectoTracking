<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperativas extends Model
{
    /*Schema::create('cooperativa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('estado');
            $table->engine = 'InnoDB';
            $table->timestamps();
        });
*/
        protected $table='cooperativa';
        protected $fillable = ['id', 'nombre', 'direccion', 'telefono','email', 'estado'];        
}
