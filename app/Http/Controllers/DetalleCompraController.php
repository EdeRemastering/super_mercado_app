<?php
namespace App\Http\Controllers;

use App\Models\DetalleCompra;
use Illuminate\Http\Request;

class DetalleCompraController extends Controller
{
    public function index()
    {
        return DetalleCompra::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_compra' => 'required|exists:compras,id',
            'id_producto' => 'required|exists:productos,id',
            'cantidad' => 'required|integer',
            'precio_unitario' => 'required|numeric',
            'sub_total' => 'required|numeric',
        ]);

        $detalleCompra = DetalleCompra::create($request->all());

        return response()->json($detalleCompra, 201);
    }

    public function show($id)
    {
        return DetalleCompra::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $detalleCompra = DetalleCompra::findOrFail($id);
        $detalleCompra->update($request->all());

        return response()->json($detalleCompra, 200);
    }

    public function destroy($id)
    {
        $detalleCompra = DetalleCompra::findOrFail($id);
        $detalleCompra->delete();

        return response()->json(null, 204);
    }
}
 