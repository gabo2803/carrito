<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Laptop HP',
            'descripcion' => 'Laptop HP con procesador Intel i5, 8GB RAM y 256GB SSD',
            'precio' => 750.00,
        ]);

        Producto::create([
            'nombre' => 'Smartphone Samsung',
            'descripcion' => 'Samsung Galaxy S21 con pantalla de 6.2 pulgadas y 128GB de almacenamiento',
            'precio' => 699.99,
        ]);

        Producto::create([
            'nombre' => 'Audífonos Sony',
            'descripcion' => 'Audífonos inalámbricos Sony con cancelación de ruido',
            'precio' => 199.99,
        ]);
    }
}
