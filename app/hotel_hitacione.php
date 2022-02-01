<?php

namespace App;

use App\hotel_precio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria

class hotel_hitacione extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre', 'numero', 'camas', 'tipo','persona','estatus', 'piso', 'television','descripcion','observacion'
    ];

    public function precio(){
        return $this->belongsTo(hotel_precio::class, 'tipo', 'id');
    }
}
