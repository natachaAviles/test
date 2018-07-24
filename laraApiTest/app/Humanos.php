<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Humanos extends Model
{
    protected $fillable = ['nombre','apellido','rut','fecha_nacimiento'];
}
