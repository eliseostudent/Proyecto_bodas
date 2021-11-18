<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Eliseo',
            'email'=>'eliseo@gmail.com',
            'email_verified_at'=>'2021-11-10 22:50:43',
            'password'=>'$2y$10$L9m5CHMH449LV21krwHb2eRmdHphuQhWZug679wCl1mycF5cFgjHq'//esta es un hash de la contraseña:123456789
        ]);
    }
}
