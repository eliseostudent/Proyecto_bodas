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
    public function lugar(){
        return $this->hasOne(Lugar::class);
    }
    public function banco(){
        return $this->hasOne(Banco::class);
    }
    public function mesas(){
        return $this->hasMany(Mesa::class);
    }
    public function fotos(){
        return $this->hasMany(Foto::class);
    }
    public function invitados(){
        return $this->hasMany(Invitado::class);
    }
}

