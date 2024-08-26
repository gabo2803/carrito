<?php

namespace App\Http\Controllers;

use App\Models\DetalleCarito;
use Illuminate\Http\Request;

class DetalleCaritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function crearcarrito()
    {
        // Obtener el producto
            $producto = Producto::find($productoId);

            $existingProduct = $carrito->productos()->where('producto_id', $producto->id)->first();

            if ($existingProduct) {
                // Si el producto ya está en el carrito, actualiza la cantidad y el valor total
                $nuevaCantidad = $existingProduct->pivot->cantidad + 1;
                $valorTotal = $nuevaCantidad * $producto->precio;

                $carrito->productos()->updateExistingPivot($producto->id, [
                    'cantidad' => $nuevaCantidad,
                    'valor_total' => $valorTotal
                ]);
            } else {
                // Si no, añade el producto al carrito con la cantidad inicial y valor total
                $carrito->productos()->attach($producto->id, [
                    'cantidad' => 1,
                    'valor_total' => $producto->precio
                ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetalleCarito $detalleCarito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetalleCarito $detalleCarito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetalleCarito $detalleCarito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetalleCarito $detalleCarito)
    {
        //
    }
}
