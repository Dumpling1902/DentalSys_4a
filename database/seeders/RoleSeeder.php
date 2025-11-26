<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Definir roles
        $roles = [
            'Dentista General',
            'Ortodoncista',
            'Odontopediatra',
            'Periodoncista',
        ];
        //Crear roles
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}