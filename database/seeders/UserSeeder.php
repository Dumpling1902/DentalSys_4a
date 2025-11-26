<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crear un usuario de prueba
        User::factory()->create([
            'name' => 'Damaris Ramirez',
            'email' => 'mdamaris1902@gmail.com',
            'password' => bcrypt('Liliana190206'),
            'id_number' => '123456789',
            'phone' => '5555555555',
            'address' => '123 Main St, City, Country',
        ]);
    }
}
