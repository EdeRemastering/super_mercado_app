<?php
namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::with('detalleCompras')->get();
        return view('compras.index', compact('compras'));
    }

    public function create()
    {
        return view('compras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id',
            'id_proveedor' => 'required|exists:proveedores,id',
            'total' => 'required|numeric',
            'tipo_pago' => 'required|string',
            'fecha_compra' => 'required|date',
        ]);

        $compra = Compra::create($request->all());

        return redirect()->route('compras.index')->with('success', 'Compra creada con éxito.');
    }

    public function show($id)
    {
        $compra = Compra::with('detalleCompras')->findOrFail($id);
        return view('compras.show', compact('compra'));
    }

    public function edit($id)
    {
        $compra = Compra::findOrFail($id);
        return view('compras.edit', compact('compra'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id',
            'id_proveedor' => 'required|exists:proveedores,id',
            'total' => 'required|numeric',
            'tipo_pago' => 'required|string',
            'fecha_compra' => 'required|date',
        ]);

        $compra = Compra::findOrFail($id);
        $compra->update($request->all());

        return redirect()->route('compras.index')->with('success', 'Compra actualizada con éxito.');
    }

    public function destroy($id)
    {
        $compra = Compra::findOrFail($id);
        $compra->delete();

        return redirect()->route('compras.index')->with('success', 'Compra eliminada con éxito.');
    }
}
