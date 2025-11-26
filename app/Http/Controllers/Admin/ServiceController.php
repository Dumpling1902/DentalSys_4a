<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.services.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar que se cree bien
        $request->validate(['name' => 'required|unique:services,name']);

        //Si pasa la validacion, creara el servicio
        $service = Service::create(['name' => $request->name, 'price' => $request->price]);

        //Variable de un solo uso para alerta
        session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Servicio creado correctamente',
            'text' => 'El servicio ha sido creado exitosamente'
        ]);

        //Redireccionara a la tabla principal
        return redirect()->route('admin.services.index')->with('success', 'Service created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        {
        //Validar que se cree bien
        $request->validate(['name' => 'required|unique:services,name,'.$service->id]);

        //Si el campo no cambio, no actualices
        if($service->name === $request->name){
            session()->flash('swal',
        [
            'icon' => 'info',
            'title' => 'Sin cambios',
            'text' => 'No se detectaron modificaciones'
        ]);

            //Redirecciona al mismo lugar
            return redirect()->route('admin.services.edit', $service);
        }

        //Si pasa la validacion, actualiza el servicio
        $service->update(['name' => $request->name]);

        //Variable de un solo uso para alerta
        session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Servicio actualizado correctamente',
            'text' => 'El servicio ha sido actualizado exitosamente'
        ]);

        //Redireccionara a la tabla principal
        return redirect()->route('admin.services.index', $service);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //Borrar el elemento
        $service->delete();

        //Alerta
        session()->flash('swal',
        [
            'icon' => 'success',
            'title' => 'Servicio eliminado correctamente',
            'text' => 'El servicio ha sido eliminado exitosamente'
        ]);

        //Redireccionara a la tabla principal
        return redirect()->route('admin.services.index');
    }
}
