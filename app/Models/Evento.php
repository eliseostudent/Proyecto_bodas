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
    //nombre_enlace
    public function getFechaFormatoAttribute(){
        $year=substr($this->fecha_evento,0,4);
        $month=substr($this->fecha_evento,5,2);
        $day=substr($this->fecha_evento,8,2);
        $hour=intval(substr($this->hora_evento,0,2));
        if ($hour>12){
            $horario='PM';
            $hour=$hour-12;
        }
        else{
            $horario='AM';
        }
        $minutes=substr($this->hora_evento,3,2);
        return $month . '/' . $day . '/' . $year . ' ' . strval($hour) . ':' . $minutes . ' ' . $horario;
    }
}

