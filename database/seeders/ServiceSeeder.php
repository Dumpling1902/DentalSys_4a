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
                'description' => 'Evaluación completa del estado de salud oral y plan de tratamiento inicial.',
            ],
            [
                'name' => 'Limpieza Dental (Profilaxis)',
                'price' => 75.00,
                'description' => 'Eliminación de placa y sarro, incluye pulido dental.',
            ],
            [
                'name' => 'Extracción Simple',
                'price' => 120.00,
                'description' => 'Procedimiento para remover un diente no restaurable o de leche.',
            ],
            [
                'name' => 'Obturación de Resina (Empaste)',
                'price' => 90.00,
                'description' => 'Relleno estético para restaurar dientes afectados por caries.',
            ],
            [
                'name' => 'Blanqueamiento Dental (Sesión Completa)',
                'price' => 350.00,
                'description' => 'Tratamiento profesional para aclarar el color de los dientes.',
            ],
            [
                'name' => 'Ortodoncia (Aparato Completo)',
                'price' => 1500.00, 
                'description' => 'Colocación de brackets o alineadores para corregir la mordida y alineación.',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
