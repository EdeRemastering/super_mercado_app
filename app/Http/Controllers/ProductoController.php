<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria; // Asegúrate de importar el modelo de Categoria
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all(); // Obtén todas las categorías
        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo_barras' => 'required|string|unique:productos',
            'id_categoria' => 'required|exists:categorias,id',
            'precio_compra' => 'required|numeric',
            'precio_venta' => 'required|numeric',
            'stock' => 'required|integer',
            'stock_minimo' => 'required|integer',
            'fecha_expiracion' => 'nullable|date',
            'estado' => 'required|boolean',
        ]);

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all(); // Obtén todas las categorías
        return view('productos.edit', compact('producto', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo_barras' => 'required|string|unique:productos,codigo_barras,' . $producto->id,
            'id_categoria' => 'required|exists:categorias,id',
            'precio_compra' => 'required|numeric',
            'precio_venta' => 'required|numeric',
            'stock' => 'required|integer',
            'stock_minimo' => 'required|integer',
            'fecha_expiracion' => 'nullable|date',
            'estado' => 'required|boolean',
        ]);
        
        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
