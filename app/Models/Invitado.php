<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'invitado_id',
        'nombre_invitado',
        'correo_invitado',
        'numero_boletos',
        'confirmacion',
        'hash',
        'evento_id'
    ];
    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }
}
