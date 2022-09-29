<?php

namespace Database\Factories;

use App\Models\Invitado;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvitadoFactory extends Factory
{
    protected $model=Invitado::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_invitado'=>$this->faker->name(),
            'correo_invitado'=>$this->faker->email(),
            'numero_boletos'=>$this->faker->randomDigitNot(0),
            'confirmacion'=>$this->faker->randomElement([0,1,2]),
            'evento_id'=>1,
        ];
    }
}
