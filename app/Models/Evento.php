<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'evento_id',
        'nombre_evento',
        'contraseña_del_evento',
        'seccion_imagenes'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}

