<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Service;

class ServiceTable extends DataTableComponent
{
    protected $model = Service::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre del Servicio", "name")
                ->sortable()
                ->searchable(),
            Column::make("Precio", "price")
                ->sortable()
                ->format(function ($value) {
                    return '$' . number_format($value, 2, '.', ',');
                }),
            Column::make("Fecha de Creación", "created_at")
                ->sortable()
                ->format(function ($value) {
                    return $value->format('d/m/Y H:i');
                }),
            Column::make("Acciones")
                ->label(function ($row) {
                    return view('admin.services.actions',
                        ['service' => $row]);
                }),
        ];
    }
}
