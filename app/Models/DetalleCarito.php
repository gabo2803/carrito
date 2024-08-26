<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCarito extends Model
{
    protected $table = 'detalle_carrito';

    protected $fillable = ['carrito_id', 'producto_id', 'cantidad', 'valor_total'];

    public function carrito()
    {
        return $this->belongsTo(Carrito::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
