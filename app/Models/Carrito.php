<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $fillable = ['id_cliente'];

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'detalle_carrito')
                    ->withPivot('cantidad')
                    ->withTimestamps();
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
