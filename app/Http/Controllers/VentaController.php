<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('detalleVentas')->get();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        return view('ventas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id',
            'total' => 'required|numeric',
            'tipo_pago' => 'required|string',
            'estado' => 'required|boolean',
            'observaciones' => 'nullable|string',
            'fecha_venta' => 'required|date',
        ]);

        $venta = Venta::create($request->all());

        return redirect()->route('ventas.index')->with('success', 'Venta creada con éxito.');
    }

    public function show($id)
    {
        $venta = Venta::with('detalleVentas')->findOrFail($id);
        return view('ventas.show', compact('venta'));
    }

    public function edit($id)
    {
        $venta = Venta::findOrFail($id);
        return view('ventas.edit', compact('venta'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id',
            'total' => 'required|numeric',
            'tipo_pago' => 'required|string',
            'estado' => 'required|boolean',
            'observaciones' => 'nullable|string',
            'fecha_venta' => 'required|date',
        ]);

        $venta = Venta::findOrFail($id);
        $venta->update($request->all());

        return redirect()->route('ventas.index')->with('success', 'Venta actualizada con éxito.');
    }

    public function destroy($id)
    {
        $venta = Venta::findOrFail($id);
        $venta->delete();

        return redirect()->route('ventas.index')->with('success', 'Venta eliminada con éxito.');
    }
}
