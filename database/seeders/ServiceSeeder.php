<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Consulta y Diagnóstico Inicial',
                'price' => 50.00,
            ],
            [
                'name' => 'Limpieza Dental (Profilaxis)',
                'price' => 75.00,
            ],
            [
                'name' => 'Extracción Simple',
                'price' => 120.00,
            ],
            [
                'name' => 'Obturación de Resina (Empaste)',
                'price' => 90.00,
            ],
            [
                'name' => 'Blanqueamiento Dental (Sesión Completa)',
                'price' => 350.00,
            ],
            [
                'name' => 'Ortodoncia (Aparato Completo)',
                'price' => 1500.00, 
            ],
        ];

        //Crear servicios
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
