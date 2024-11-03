<?php
namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function index()
    {
        return DetalleVenta::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_venta' => 'required|exists:ventas,id',
            'id_producto' => 'required|exists:productos,id',
            'cantidad' => 'required|integer',
            'precio_unitario' => 'required|numeric',
            'descuento' => 'nullable|numeric',
            'sub_total' => 'required|numeric',
        ]);

        $detalleVenta = DetalleVenta::create($request->all());

        return response()->json($detalleVenta, 201);
    }

    public function show($id)
    {
        return DetalleVenta::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $detalleVenta = DetalleVenta::findOrFail($id);
        $detalleVenta->update($request->all());

        return response()->json($detalleVenta, 200);
    }

    public function destroy($id)
    {
        $detalleVenta = DetalleVenta::findOrFail($id);
        $detalleVenta->delete();

        return response()->json(null, 204);
    }
}
