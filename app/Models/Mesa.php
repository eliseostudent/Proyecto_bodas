<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable = [
        'evento_id',
        'nombre_mesa',
        'enlace_mesa'
    ];
    public function evento(){
        return $this->belongsTo(Evento::class);
    }
    //nombre_enlace
    public function getNombreEnlaceAttribute(){
        return $this->nombre_mesa . ' : ' . $this->enlace_mesa;
    }
}
