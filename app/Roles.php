<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    /*        Schema::create('rol', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('estado');
            $table->engine = 'InnoDB';
            $table->timestamps();
        });
*/	
        protected $table='rol';
        protected $fillable = ['id', 'nombre', 'estado', 'password'];

}
