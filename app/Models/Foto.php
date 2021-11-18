<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable = [
        'evento_id',
        'ruta_foto'
    ];
    public function evento(){
        return $this->belongsTo(Evento::class);
    }
}
