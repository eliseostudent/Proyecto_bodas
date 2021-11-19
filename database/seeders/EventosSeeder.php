<?php

namespace Database\Seeders;
use App\Models\Evento;
use Illuminate\Database\Seeder;
use App\Models\Lugar;
use App\Models\Banco;
class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $evento=Evento::create([
            'nombre_evento' => 'Evento seeder',//aqui el evento_id representa el nombre del evento para no hacer un formulario mas
            'contraseña_del_evento'=> '123456789'
        ]);
        $evento->users()->attach(1);
        Lugar::create(['evento_id' => $evento->id]);
        Banco::create(['evento_id' => $evento->id]);
    }
}
