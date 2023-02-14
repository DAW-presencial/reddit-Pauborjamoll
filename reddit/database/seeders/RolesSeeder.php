<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::factory(1)->create([
            'name' => 'Visitante',
         ]);

         \App\Models\Role::factory(1)->create([
            'name' => 'Registrado',
         ]);

         \App\Models\Role::factory(1)->create([
            'name' => 'Administrador'
         ]);

    }
}
