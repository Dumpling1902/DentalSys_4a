<x-admin-layout 
    title="Roles | DentalSys"
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
            'name' => 'Nuevo',
        ],
    ]"
>

    <x-wire-card>

        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf

            <x-wire-input 
                label="Nombre" 
                name="name" 
                placeholder="Nombre del usuario" 
                value="{{ old('name') }}"
            />

            <x-wire-input 
                label="Email" 
                name="email" 
                placeholder="Correo electrónico del usuario" 
                value="{{ old('email') }}"
            />

            <x-wire-input
                label="Número de ID" 
                name="id_number" 
                placeholder="Número de ID del usuario"
                value="{{ old('id_number') }}"
            />

            <x-wire-input
                label="Teléfono" 
                name="phone" 
                placeholder="Teléfono del usuario"
                value="{{ old('phone') }}"
            />

            <div class="flex justify-end mt-4">
                <x-wire-button type="submit" blue>
                    Guardar
                </x-wire-button>
            </div>

        </form>

    </x-wire-card>

</x-admin-layout>
