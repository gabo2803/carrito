<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre', 'correo_electronico', 'direccion', 'telefono'];

    public function carritos()
    {
        return $this->hasMany(Carrito::class, 'id_cliente');
    }
}
