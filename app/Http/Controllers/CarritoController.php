<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;
use App\Models\producto;

class CarritoController extends Controller
{
   
    public function agregar(Request $request, $productoId)
    {

        // Suponiendo que tienes un modelo Cliente relacionado con el usuario autenticado.
        $cliente = 1;

        // Obtener el producto
        $producto = Producto::find($productoId);

        // Buscar o crear el carrito del cliente.
        $carrito = Carrito::firstOrCreate(['id_cliente' => $cliente]);

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

    }
    public function MostrarCarrito()
    {
        
        @foreach($carrito->productos as $producto)
            <div>
                <p>Producto: {{ $producto->nombre }}</p>
                <p>Cantidad: {{ $producto->pivot->cantidad }}</p>
                <p>Valor Total: ${{ $producto->pivot->valor_total }}</p>
            </div>
        @endforeach

<p>Total Carrito: ${{ $carrito->productos->sum('pivot.valor_total') }}</p>
    }

    
       
}
