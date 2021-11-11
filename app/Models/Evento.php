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
        'nombre_1',
        'nombre_2',
        'fecha_evento',
        'hora_evento',
        'no_niños',
        'codigo_de_vestimenta',
        'foto_novios',
        'mensaje_principal'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}

