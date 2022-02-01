<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria

class recepcion_recervacione extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'fecha_entrada', 'fecha_salida', 'cliente', 'detalle',
        'id_cuarto', 'estatus','pagado'
    ];
   
}
