<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $usuarios = Usuario::all();
            return view('usuarios.index', compact('usuarios'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al obtener los usuarios: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    // Validación de datos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'correo' => 'required|string|email|max:255|unique:usuarios',
        'contraseña' => 'required|string|min:8',
        'rol' => 'required|string',
        'telefono' => 'nullable|string|max:15',
        'direccion' => 'nullable|string|max:255',
    ]);

    // Creación del nuevo usuario
    $usuario = Usuario::create([
        'nombre' => $request->nombre,
        'correo' => $request->correo,
        'contraseña' => Hash::make($request->contraseña), // Encriptar contraseña
        'rol' => $request->rol,
        'telefono' => $request->telefono,
        'direccion' => $request->direccion,
        'estado' => $request->estado ?? 1, // Estado predeterminado a 1
    ]);

    // Retornar respuesta exitosa
    return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $usuario = Usuario::findOrFail($id);
            return view('usuarios.show', compact('usuario'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al mostrar el usuario: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $usuario = Usuario::findOrFail($id);
            return view('usuarios.edit', compact('usuario'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al editar el usuario: ' . $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:usuarios,email,' . $id,
                'rol' => 'required|string'
            ]);

            $usuario = Usuario::findOrFail($id);
            $usuario->update($request->only('nombre', 'email', 'rol'));

            // Solo actualiza la contraseña si se proporciona
            if ($request->filled('contrasena')) {
                $request->validate(['contrasena' => 'string|min:8|confirmed']);
                $usuario->contrasena = Hash::make($request->contrasena);
            }

            $usuario->save();
            return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al actualizar el usuario: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $usuario = Usuario::findOrFail($id);
            $usuario->delete();
            return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al eliminar el usuario: ' . $e->getMessage());
        }
    }
}
