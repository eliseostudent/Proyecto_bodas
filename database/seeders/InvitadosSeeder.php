<?php

namespace Database\Seeders;

use App\Models\Invitado;
use Illuminate\Database\Seeder;

class InvitadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invitado::factory(10)->create();
    }
}
