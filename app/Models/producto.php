<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'precio'];

    public function carritos()
    {
        return $this->belongsToMany(Carrito::class, 'detalle_carrito')
                    ->withPivot('cantidad')
                    ->withTimestamps();
    }
}
