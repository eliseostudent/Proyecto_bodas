<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable = [
        'nombre_ceremonia',
        'direccion_ceremonia',
        'ruta_foto_ceremonia',
        'fecha_ceremonia',
        'nombre_salon',
        'direccion_salon',
        'ruta_foto_salon',
        'fecha_salon',
        'evento_id'
    ];
    public function evento(){
        return $this->belongsTo(Evento::class);
    }
}
