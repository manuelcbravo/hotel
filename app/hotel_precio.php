<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria

class hotel_precio extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre', 'precio_alta', 'precio_baja', 'descripcion'
    ];

}
