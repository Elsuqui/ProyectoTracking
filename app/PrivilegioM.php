<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivilegioM extends Model
{
    /*        Schema::create('privilegio', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('id_rol')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_rol')->references('id')->on('rol');
            $table->foreign('id_user')->references('id')->on('users');
           
            $table->engine = 'InnoDB';
            $table->timestamps();
        });*/
        protected $table='privilegio';
        protected $fillable = ['id', 'id_rol', 'id_user'];
}
