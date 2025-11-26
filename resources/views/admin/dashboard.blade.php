<x-admin-layout :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard')
    ],
    
]">
    <div class="space-y-6 p-4 sm:p-6 lg:p-8">

        <!-- TÍTULO PRINCIPAL -->
        <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white">Panel de Control DentalSys</h1>
        <p class="text-gray-600 dark:text-gray-400">Resumen ejecutivo y métricas clave del consultorio dental.</p>

        <!-- SECCIÓN 1: METRICAS PRINCIPALES (CARDS) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Tarjeta 1: Citas del Día -->
            <div class="bg-white dark:bg-gray-800 p-5 rounded-xl shadow-lg border-l-4 border-blue-500">
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Citas Pendientes Hoy</p>
                <div class="mt-1 flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white">12</span>
                    <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
            </div>

            <!-- Tarjeta 2: Nuevos Pacientes -->
            <div class="bg-white dark:bg-gray-800 p-5 rounded-xl shadow-lg border-l-4 border-green-500">
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Nuevos Pacientes (Semana)</p>
                <div class="mt-1 flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white">18</span>
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
            </div>

            <!-- Tarjeta 3: Doctores Activos -->
            <div class="bg-white dark:bg-gray-800 p-5 rounded-xl shadow-lg border-l-4 border-yellow-500">
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Doctores Disponibles</p>
                <div class="mt-1 flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white">4</span>
                    <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                </div>
            </div>

            <!-- Tarjeta 4: Ganancias Estimadas -->
            <div class="bg-white dark:bg-gray-800 p-5 rounded-xl shadow-lg border-l-4 border-red-500">
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Ingreso Estimado (Mes)</p>
                <div class="mt-1 flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white">$15,400</span>
                    <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zM9 13h6"></path></svg>
                </div>
            </div>

        </div>
        
        <!-- SECCIÓN 2: GRÁFICOS Y ACTIVIDAD RECIENTE -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Columna 1 & 2: Gráfico de Citas por Mes -->
            <div class="lg:col-span-2 bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Tendencia de Citas (Últimos 6 Meses)</h3>
                <!-- Placeholder para un gráfico de Livewire o Chart.js (sólo ilustración) -->
                <div class="h-64 flex items-center justify-center bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-lg">
                    <p class="text-gray-500 dark:text-gray-400">Gráfico de líneas (Citas Agendadas vs. Realizadas)</p>
                </div>
            </div>

            <!-- Columna 3: Próximas Citas (Recepción) -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Próximas Citas (Recepción)</h3>
                <ul class="space-y-4">
                    <!-- Elemento de Cita 1 -->
                    <li class="border-b pb-2 dark:border-gray-700">
                        <p class="text-gray-900 dark:text-white font-medium">Laura Martínez</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">10:00 AM - Dr. Javier Pérez</p>
                    </li>
                    <!-- Elemento de Cita 2 -->
                    <li class="border-b pb-2 dark:border-gray-700">
                        <p class="text-gray-900 dark:text-white font-medium">David Figueroa</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">11:30 AM - Dra. Ana García</p>
                    </li>
                    <!-- Elemento de Cita 3 -->
                    <li>
                        <p class="text-gray-900 dark:text-white font-medium">Eldier Lizama</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">1:00 PM - Higiene Dental</p>
                    </li>
                </ul>
                <div class="mt-4 text-center">
                    <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Ver Agenda Completa</a>
                </div>
            </div>
            
        </div>
        
        <!-- SECCIÓN 3: Alertas del Sistema -->
        <div class="bg-yellow-100 dark:bg-yellow-900 p-4 rounded-xl border border-yellow-300 dark:border-yellow-700 shadow-md">
            <h3 class="font-bold text-yellow-800 dark:text-yellow-200">Alerta del Sistema</h3>
            <p class="text-sm text-yellow-700 dark:text-yellow-300">Hay 3 pacientes con cuentas pendientes de activación (Rol: Paciente). Revise el módulo de "Gestión de Usuarios".</p>
        </div>

    </div>
</x-admin-layout>