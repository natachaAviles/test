<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    protected $fillable = ['region','comuna','humano_encargado','id_estado'];
}
