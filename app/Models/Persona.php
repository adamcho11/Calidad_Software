<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model {
    // Permite que estos campos se llenen mediante el request de JMeter
    protected $fillable = ['nombres', 'apellidos', 'correo', 'sexo'];
}