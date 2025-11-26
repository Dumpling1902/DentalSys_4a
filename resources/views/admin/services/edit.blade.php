<x-admin-layout title="Roles | DentalSys"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Servicios',
        'href' => route('admin.services.index'),
    ],
    [
        'name' => 'Editar',
    ],
]">

<x-wire-card>
    <form action="{{route('admin.services.update', $service)}}" method="POST">
        @csrf
        @method('PUT')
        <x-wire-input label="Nombre" name="name" placeholder="Nombre del servicio" value="{{old('name', $service->name)}}">
        </x-wire-input>
        <div class="flex justify-end mt-4">
            <x-wire-button type="submit" blue>Actualizar</x-wire-button>
        </div>
    </form>
</x-wire-card>

</x-admin-layout>