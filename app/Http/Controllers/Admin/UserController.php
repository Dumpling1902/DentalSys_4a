<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Listado de usuarios
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Formulario de creación
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Guardar nuevo usuario
     */
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'phone'     => 'nullable|string|max:20',
            'id_number' => 'nullable|string|unique:users,id_number',
            'address'   => 'nullable|string|max:255',
            'password'  => 'nullable|string|min:6',
        ]);

        // Crear usuario
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'id_number' => $request->id_number,
            'address'   => $request->address,
            'password'  => $request->password ? Hash::make($request->password) : null,
        ]);

        // Alerta
        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Usuario creado correctamente',
            'text'  => 'El usuario ha sido creado exitosamente.',
        ]);

        return redirect()->route('admin.users.index');
    }

    /**
     * Formulario de edición
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Actualizar usuario
     */
    public function update(Request $request, User $user)
    {
        // Validación
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email,' . $user->id,
            'phone'     => 'nullable|string|max:20',
            'id_number' => 'nullable|string|unique:users,id_number,' . $user->id,
            'address'   => 'nullable|string|max:255',
            'password'  => 'nullable|string|min:6',
        ]);

        // Verificar si no hubo cambios (incluye nulls)
        if (
            $user->name      === $request->name &&
            $user->email     === $request->email &&
            $user->phone     === $request->phone &&
            $user->id_number === $request->id_number &&
            $user->address   === $request->address &&
            !$request->password
        ) {
            session()->flash('swal', [
                'icon'  => 'info',
                'title' => 'Sin cambios',
                'text'  => 'No se detectaron modificaciones.',
            ]);

            return redirect()->route('admin.users.edit', $user);
        }

        // Actualizar usuario
        $user->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'id_number' => $request->id_number,
            'address'   => $request->address,
            'password'  => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Usuario actualizado correctamente',
            'text'  => 'El usuario ha sido actualizado exitosamente.',
        ]);

        return redirect()->route('admin.users.index');
    }

    /**
     * Eliminar usuario
     */
    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('swal', [
            'icon'  => 'success',
            'title' => 'Usuario eliminado correctamente',
            'text'  => 'El usuario ha sido eliminado exitosamente.',
        ]);

        return redirect()->route('admin.users.index');
    }
}
