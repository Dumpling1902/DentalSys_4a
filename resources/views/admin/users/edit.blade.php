<x-admin-layout title="Usuarios | DentalSys"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Usuarios',
        'href' => route('admin.users.index'),
    ],
    [
        'name' => 'Editar',
    ],
]">

<x-wire-card>
    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <x-wire-input 
            label="Nombre" 
            name="name" 
            placeholder="Nombre del usuario"
            value="{{ old('name', $user->name) }}">
        </x-wire-input>

        <x-wire-input 
            label="Correo electrónico" 
            name="email" 
            type="email"
            placeholder="correo@ejemplo.com"
            value="{{ old('email', $user->email) }}">
        </x-wire-input>


        <x-wire-input 
            label="Número de identificación (ID Number)" 
            name="id_number" 
            placeholder="Ejemplo: 123456789"
            value="{{ old('id_number', $user->id_number) }}">
        </x-wire-input>

        <x-wire-input 
            label="Teléfono" 
            name="phone"
            placeholder="Número de teléfono"
            value="{{ old('phone', $user->phone) }}">
        </x-wire-input>

        <x-wire-input 
            label="Dirección (opcional)" 
            name="address"
            placeholder="Dirección del usuario"
            value="{{ old('address', $user->address) }}">
        </x-wire-input>

        <x-wire-input 
            label="Contraseña (solo si deseas cambiarla)" 
            name="password" 
            type="password"
            placeholder="Nueva contraseña (opcional)">
        </x-wire-input>

        <div class="flex justify-end mt-4">
            <x-wire-button type="submit" blue>Actualizar</x-wire-button>
        </div>

    </form>
</x-wire-card>

</x-admin-layout>
