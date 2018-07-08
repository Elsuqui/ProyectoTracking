<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
/*        Schema::create('users', function (Blueprint $table) {
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
        });*/
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','id_cooperativa',
        'nombres', 'apellidos', 'email', 'password', 'cedula', 'fecha_nacimiento','telefono',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
