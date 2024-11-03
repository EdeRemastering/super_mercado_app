<?php
namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        return Compra::with('detalleCompras')->get();
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

        return response()->json($compra, 201);
    }

    public function show($id)
    {
        return Compra::with('detalleCompras')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $compra = Compra::findOrFail($id);
        $compra->update($request->all());

        return response()->json($compra, 200);
    }

    public function destroy($id)
    {
        $compra = Compra::findOrFail($id);
        $compra->delete();

        return response()->json(null, 204);
    }
}
