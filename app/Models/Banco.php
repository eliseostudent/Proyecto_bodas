<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable = [
        'titular_banco',
        'cuenta_banco',
        'clabe_banco',
        'evento_id'
    ];
    public function evento(){
        return $this->belongsTo(Evento::class);
    }
}
