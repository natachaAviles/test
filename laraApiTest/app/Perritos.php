<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perritos extends Model
{
    protected $fillable = ['raza','color','fecha_nacimiento_aprox','nombre_temporal','id_estado','id_sucursal'];
}